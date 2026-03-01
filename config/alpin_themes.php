<?php

$defaultOptions = [
    'saffron-classic' => [
        'label' => 'Saffron Classic',
        'color' => '#8a2d17',
    ],
    'alpine-forest' => [
        'label' => 'Alpine Forest',
        'color' => '#216b4e',
    ],
    'midnight-saffron' => [
        'label' => 'Midnight Saffron',
        'color' => '#bb5f14',
    ],
    'terracotta-sun' => [
        'label' => 'Terracotta Sun',
        'color' => '#b64d34',
    ],
    'ivory-minimal' => [
        'label' => 'Ivory Minimal',
        'color' => '#374b65',
    ],
];

$parsedOptions = [];
$rawThemeOptions = trim((string) env('ALPIN_THEME_OPTIONS', ''));

if ($rawThemeOptions !== '') {
    foreach (explode(',', $rawThemeOptions) as $rawOption) {
        $parts = array_map('trim', explode('|', $rawOption));

        if (count($parts) < 2) {
            continue;
        }

        $key = $parts[0] ?? '';
        $label = $parts[1] ?? '';
        $color = $parts[2] ?? null;

        if ($key === '' || $label === '') {
            continue;
        }

        $fallbackColor = $defaultOptions[$key]['color'] ?? '#8a2d17';
        $validColor = is_string($color) && preg_match('/^#([a-fA-F0-9]{3}|[a-fA-F0-9]{6})$/', $color);

        $parsedOptions[$key] = [
            'label' => $label,
            'color' => $validColor ? $color : $fallbackColor,
        ];
    }
}

$options = $defaultOptions;
foreach ($parsedOptions as $themeKey => $themeMeta) {
    $options[$themeKey] = $themeMeta;
}

$defaultTheme = trim((string) env('ALPIN_THEME_DEFAULT', 'saffron-classic'));
if (! isset($options[$defaultTheme])) {
    $defaultTheme = array_key_first($options) ?: 'saffron-classic';
}

return [
    'default' => $defaultTheme,
    'options' => $options,
];
