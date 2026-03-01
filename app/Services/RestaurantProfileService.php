<?php

namespace App\Services;

class RestaurantProfileService
{
    public function profile(): array
    {
        return config('restaurant', []);
    }

    public function name(): string
    {
        return (string) config('restaurant.name', 'Alpin Curry');
    }

    public function legalName(): string
    {
        return (string) config('restaurant.legal_name', $this->name());
    }

    public function brand(): array
    {
        return config('restaurant.brand', []);
    }

    public function contact(): array
    {
        return config('restaurant.contact', []);
    }

    public function address(): array
    {
        return config('restaurant.address', []);
    }

    public function legal(): array
    {
        return config('restaurant.legal', []);
    }

    public function phoneDisplay(): string
    {
        return (string) ($this->contact()['phone_display'] ?? '');
    }

    public function phoneHref(): string
    {
        $normalized = $this->normalizePhone((string) ($this->contact()['phone_raw'] ?? ''));

        if ($normalized === '') {
            $normalized = $this->normalizePhone($this->phoneDisplay());
        }

        return $normalized;
    }

    public function whatsappNumber(): string
    {
        return preg_replace('/\D+/', '', (string) ($this->contact()['whatsapp_raw'] ?? '')) ?? '';
    }

    public function whatsappUrl(?string $message = null): string
    {
        $target = $this->whatsappNumber();
        if ($target === '') {
            $target = preg_replace('/\D+/', '', $this->phoneHref()) ?? '';
        }

        $text = $message ?? 'Hello Alpin Curry, I would like to reserve a table.';

        return 'https://wa.me/'.$target.'?text='.rawurlencode($text);
    }

    public function fullAddressLine(): string
    {
        $address = $this->address();

        $streetLine = trim(((string) ($address['street'] ?? '')).' '.((string) ($address['street_number'] ?? '')));
        $cityLine = trim(((string) ($address['postal_code'] ?? '')).' '.((string) ($address['city'] ?? '')));
        $country = trim((string) ($address['country'] ?? ''));

        return implode(', ', array_values(array_filter([$streetLine, $cityLine, $country])));
    }

    public function mapQuery(): string
    {
        $configured = trim((string) config('restaurant.map_query', ''));

        return $configured !== '' ? $configured : $this->fullAddressLine();
    }

    public function mapEmbedUrl(): string
    {
        return 'https://www.google.com/maps?q='.rawurlencode($this->mapQuery()).'&output=embed';
    }

    private function normalizePhone(string $value): string
    {
        $value = trim($value);
        if ($value === '') {
            return '';
        }

        $hasPlus = str_starts_with($value, '+');
        $digits = preg_replace('/\D+/', '', $value) ?? '';

        if ($digits === '') {
            return '';
        }

        return $hasPlus ? '+'.$digits : '+'.$digits;
    }
}
