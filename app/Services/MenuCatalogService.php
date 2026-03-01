<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Throwable;

class MenuCatalogService
{
    /**
     * @return array<int, array<string, mixed>>
     */
    public function getMenuByLocale(string $locale): array
    {
        $sections = $this->loadMenuFromLocalData($locale);

        if (! empty($sections)) {
            return $sections;
        }

        $sections = $this->fetchFromApi($locale);

        if (! empty($sections)) {
            return $sections;
        }

        return $this->fallbackMenu($locale);
    }

    /**
     * @return array<string, array<int, array<string, string>>>
     */
    public function getDietaryByLocale(string $locale): array
    {
        return [
            'allergies' => $this->readDietaryGroup(
                $this->resolveDataPath(['allergies.json']),
                'foodAllergies',
                $locale
            ),
            'intolerances' => $this->readDietaryGroup(
                $this->resolveDataPath(['intolerances.json']),
                'foodIntolerances',
                $locale
            ),
            'ingredients' => $this->readDietaryGroup(
                $this->resolveDataPath(['Ingredients.json', 'ingredients.json']),
                'foodIngredients',
                $locale
            ),
        ];
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function fetchFromApi(string $locale): array
    {
        $endpoint = (string) config('services.menu.endpoint', '');

        if ($endpoint === '') {
            return [];
        }

        $query = <<<'GRAPHQL'
query {
  foodMenus {
    name
    menuCategory {
      name
      order
      foodMenuItems {
        name
        price
        status
        order
        descriptionEn
        descriptionIt
        descriptionDe
      }
    }
  }
}
GRAPHQL;

        try {
            $response = Http::timeout((int) config('services.menu.timeout', 8))
                ->asJson()
                ->post($endpoint, ['query' => $query]);

            if (! $response->successful()) {
                return [];
            }

            $payload = $response->json();
            $foodMenus = $payload['data']['foodMenus'] ?? null;

            if (! is_array($foodMenus)) {
                return [];
            }

            $descriptionField = match ($locale) {
                'it' => 'descriptionIt',
                'de' => 'descriptionDe',
                default => 'descriptionEn',
            };

            $sections = [];

            foreach ($foodMenus as $foodMenu) {
                $categories = $foodMenu['menuCategory'] ?? [];
                if (! is_array($categories)) {
                    continue;
                }

                usort($categories, fn (array $a, array $b): int => (int) ($a['order'] ?? 999) <=> (int) ($b['order'] ?? 999));

                foreach ($categories as $category) {
                    $itemsRaw = $category['foodMenuItems'] ?? [];
                    if (! is_array($itemsRaw)) {
                        continue;
                    }

                    $items = [];

                    foreach ($itemsRaw as $item) {
                        $status = strtolower((string) ($item['status'] ?? 'active'));
                        if (! in_array($status, ['active', '1', 'true'], true)) {
                            continue;
                        }

                        $items[] = [
                            'name' => (string) ($item['name'] ?? ''),
                            'price' => (string) ($item['price'] ?? ''),
                            'description' => (string) ($item[$descriptionField] ?? ''),
                            'order' => (int) ($item['order'] ?? 999),
                        ];
                    }

                    usort($items, fn (array $a, array $b): int => (int) $a['order'] <=> (int) $b['order']);

                    if (empty($items)) {
                        continue;
                    }

                    $sections[] = [
                        'title' => (string) ($category['name'] ?? ''),
                        'items' => $items,
                    ];
                }
            }

            return $sections;
        } catch (Throwable) {
            return [];
        }
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function loadMenuFromLocalData(string $locale): array
    {
        $payload = $this->readJsonFile($this->resolveDataPath(['menu_data.json', 'menu-data.json']));
        $foodMenus = $payload['data']['foodMenus'] ?? null;

        if (! is_array($foodMenus)) {
            return [];
        }

        $descriptionField = $this->descriptionFieldForLocale($locale);
        $sections = [];

        foreach ($foodMenus as $foodMenu) {
            $menuName = (string) ($foodMenu['name'] ?? '');
            $categories = $foodMenu['menuCategory'] ?? [];

            if (! is_array($categories)) {
                continue;
            }

            usort($categories, fn (array $a, array $b): int => (int) ($a['order'] ?? 999) <=> (int) ($b['order'] ?? 999));

            foreach ($categories as $category) {
                $categoryName = (string) ($category['name'] ?? '');
                $itemsRaw = $category['foodMenuItems'] ?? [];

                if (! is_array($itemsRaw)) {
                    continue;
                }

                $items = [];

                foreach ($itemsRaw as $item) {
                    $status = strtolower((string) ($item['status'] ?? 'active'));
                    if (! in_array($status, ['active', '1', 'true'], true)) {
                        continue;
                    }

                    $items[] = [
                        'name' => (string) ($item['name'] ?? ''),
                        'price' => $this->normalizePrice((string) ($item['price'] ?? '')),
                        'description' => (string) ($item[$descriptionField] ?? ''),
                        'order' => (int) ($item['order'] ?? 999),
                        'allergies' => $this->extractDietaryTags($item['foodAllergies'] ?? [], $descriptionField),
                        'intolerances' => $this->extractDietaryTags($item['foodIntolerances'] ?? [], $descriptionField),
                    ];
                }

                usort($items, fn (array $a, array $b): int => (int) $a['order'] <=> (int) $b['order']);

                if (empty($items)) {
                    continue;
                }

                $sections[] = [
                    'title' => $menuName !== '' ? $menuName.' - '.$categoryName : $categoryName,
                    'items' => $items,
                ];
            }
        }

        return $sections;
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    private function fallbackMenu(string $locale): array
    {
        $menu = config('alpin_menu.sections', []);

        if (! is_array($menu)) {
            return [];
        }

        $sections = [];

        foreach ($menu as $section) {
            $title = $section['title'][$locale] ?? $section['title']['en'] ?? '';
            $items = [];

            foreach (($section['items'] ?? []) as $item) {
                $items[] = [
                    'name' => $item['name'][$locale] ?? $item['name']['en'] ?? '',
                    'description' => $item['description'][$locale] ?? $item['description']['en'] ?? '',
                    'price' => $item['price'] ?? '',
                ];
            }

            $sections[] = [
                'title' => $title,
                'items' => $items,
            ];
        }

        return $sections;
    }

    private function descriptionFieldForLocale(string $locale): string
    {
        return match ($locale) {
            'it' => 'descriptionIt',
            'de' => 'descriptionDe',
            default => 'descriptionEn',
        };
    }

    private function normalizePrice(string $price): string
    {
        return trim($price);
    }

    /**
     * @param  mixed  $tags
     * @return array<int, array<string, string>>
     */
    private function extractDietaryTags(mixed $tags, string $descriptionField): array
    {
        if (! is_array($tags)) {
            return [];
        }

        $normalized = [];

        foreach ($tags as $tag) {
            if (! is_array($tag)) {
                continue;
            }

            $status = strtolower((string) ($tag['status'] ?? 'active'));
            if (! in_array($status, ['active', '1', 'true'], true)) {
                continue;
            }

            $label = (string) ($tag[$descriptionField] ?? $tag['name'] ?? '');
            $key = strtolower((string) ($tag['key'] ?? $tag['name'] ?? ''));

            $normalized[] = [
                'key' => Str::slug($key),
                'label' => $label,
            ];
        }

        return $normalized;
    }

    /**
     * @return array<int, array<string, string>>
     */
    private function readDietaryGroup(string $path, string $groupKey, string $locale): array
    {
        $payload = $this->readJsonFile($path);
        $list = $payload['data'][$groupKey] ?? null;

        if (! is_array($list)) {
            return [];
        }

        $descriptionField = $this->descriptionFieldForLocale($locale);
        $rows = [];

        foreach ($list as $item) {
            if (! is_array($item)) {
                continue;
            }

            $status = strtolower((string) ($item['status'] ?? 'active'));
            if (! in_array($status, ['active', '1', 'true'], true)) {
                continue;
            }

            $label = (string) ($item[$descriptionField] ?? $item['name'] ?? '');
            $key = strtolower((string) ($item['key'] ?? $item['name'] ?? ''));

            $rows[] = [
                'key' => Str::slug($key),
                'label' => $label,
            ];
        }

        usort($rows, fn (array $a, array $b): int => strcmp($a['label'], $b['label']));

        return $rows;
    }

    /**
     * @return array<string, mixed>|null
     */
    private function readJsonFile(string $path): ?array
    {
        if (! is_file($path)) {
            return null;
        }

        $raw = file_get_contents($path);

        if ($raw === false || trim($raw) === '') {
            return null;
        }

        $normalized = $this->normalizeJson($raw);
        $decoded = json_decode($normalized, true);

        return is_array($decoded) ? $decoded : null;
    }

    private function normalizeJson(string $raw): string
    {
        $raw = preg_replace('/^\xEF\xBB\xBF/', '', $raw) ?? $raw;

        $firstObject = strpos($raw, '{');
        $firstArray = strpos($raw, '[');

        if ($firstObject === false && $firstArray === false) {
            return $raw;
        }

        $start = 0;

        if ($firstObject === false) {
            $start = $firstArray;
        } elseif ($firstArray === false) {
            $start = $firstObject;
        } else {
            $start = min($firstObject, $firstArray);
        }

        return substr($raw, $start);
    }

    private function resolveDataPath(array $candidates): string
    {
        $base = storage_path('app/private/data');

        foreach ($candidates as $candidate) {
            $path = $base.DIRECTORY_SEPARATOR.$candidate;
            if (is_file($path)) {
                return $path;
            }
        }

        return $base.DIRECTORY_SEPARATOR.$candidates[0];
    }
}
