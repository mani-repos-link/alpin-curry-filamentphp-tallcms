<?php

namespace Database\Seeders;

use App\Models\FoodAllergy;
use App\Models\FoodIngredient;
use App\Models\FoodIntolerance;
use App\Models\FoodMenuCategory;
use App\Models\FoodMenuItem;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $dataPath = storage_path('app/private/data');

        // 1. Import Ingredients
        $ingredientsData = json_decode(File::get($dataPath . '/Ingredients.json'), true);
        $ingredientMap = [];
        foreach ($ingredientsData['data']['foodIngredients'] as $item) {
            $ingredient = FoodIngredient::create([
                'name' => $item['name'],
                'description_en' => $item['descriptionEn'],
                'description_it' => $item['descriptionIt'],
                'description_de' => $item['descriptionDe'],
                'status' => $item['status'] ?? 'active',
                'order' => $item['order'] ?? 5,
            ]);
            $ingredientMap[$item['id']] = $ingredient->id;
        }

        // 2. Import Allergies
        $allergiesData = json_decode(File::get($dataPath . '/allergies.json'), true);
        $allergyMap = [];
        foreach ($allergiesData['data']['foodAllergies'] as $item) {
            $allergy = FoodAllergy::create([
                'name' => $item['name'],
                'key' => $item['key'],
                'description_en' => $item['descriptionEn'],
                'description_it' => $item['descriptionIt'],
                'description_de' => $item['descriptionDe'],
                'status' => $item['status'] ?? 'active',
                'order' => $item['order'] ?? 5,
            ]);
            $allergyMap[$item['id']] = $allergy->id;
        }

        // 3. Import Intolerances
        $intolerancesData = json_decode(File::get($dataPath . '/intolerances.json'), true);
        $intoleranceMap = [];
        foreach ($intolerancesData['data']['foodIntolerances'] as $item) {
            $intolerance = FoodIntolerance::create([
                'name' => $item['name'],
                'key' => $item['key'],
                'description_en' => $item['descriptionEn'],
                'description_it' => $item['descriptionIt'],
                'description_de' => $item['descriptionDe'],
                'status' => $item['status'] ?? 'active',
                'order' => $item['order'] ?? 5,
            ]);
            $intoleranceMap[$item['id']] = $intolerance->id;
        }

        // 4. Import Menu Data (Categories and Items)
        $menuData = json_decode(File::get($dataPath . '/menu_data.json'), true);
        foreach ($menuData['data']['foodMenus'] as $menu) {
            // Note: In your JSON structure, 'foodMenus' contains 'menuCategory'
            foreach ($menu['menuCategory'] as $cat) {
                $type = 'food';
                $lowerName = strtolower($cat['name']);
                if (str_contains($lowerName, 'drink') || 
                    str_contains($lowerName, 'beverage') || 
                    str_contains($lowerName, 'wine') || 
                    str_contains($lowerName, 'water') || 
                    str_contains($lowerName, 'beer') || 
                    str_contains($lowerName, 'juice')) {
                    $type = 'drink';
                }

                $category = FoodMenuCategory::create([
                    'name' => $cat['name'],
                    'type' => $type,
                    'display_type' => $cat['displayType'] ?? 'off',
                    'status' => $cat['status'] ?? 'active',
                    'order' => $cat['order'] ?? 5,
                    'description_en' => $cat['descriptionEn'] ?? null,
                    'description_it' => $cat['descriptionIt'] ?? null,
                    'description_de' => $cat['descriptionDe'] ?? null,
                ]);

                foreach ($cat['foodMenuItems'] as $item) {
                    $menuItem = FoodMenuItem::create([
                        'food_menu_category_id' => $category->id,
                        'name' => $item['name'],
                        'description_en' => $item['descriptionEn'] ?? '',
                        'description_it' => $item['descriptionIt'] ?? '',
                        'description_de' => $item['descriptionDe'] ?? '',
                        'price' => $item['price'] ?? '0.00',
                        'status' => $item['status'] ?? 'active',
                        'order' => $item['order'] ?? 5,
                    ]);

                    // Sync Relationships
                    if (!empty($item['foodIngredients'])) {
                        $ids = collect($item['foodIngredients'])
                            ->map(fn($ing) => $ingredientMap[$ing['id']] ?? null)
                            ->filter()
                            ->toArray();
                        $menuItem->foodIngredients()->sync($ids);
                    }

                    if (!empty($item['foodAllergies'])) {
                        $ids = collect($item['foodAllergies'])
                            ->map(fn($all) => $allergyMap[$all['id']] ?? null)
                            ->filter()
                            ->toArray();
                        $menuItem->foodAllergies()->sync($ids);
                    }

                    if (!empty($item['foodIntolerances'])) {
                        $ids = collect($item['foodIntolerances'])
                            ->map(fn($int) => $intoleranceMap[$int['id']] ?? null)
                            ->filter()
                            ->toArray();
                        $menuItem->foodIntolerances()->sync($ids);
                    }
                }
            }
        }
    }
}
