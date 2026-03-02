<!DOCTYPE html>
<html lang="{{ $config['lang'] ?? 'en' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $config['title'] }} — Menu</title>
    <style>
        {!! file_get_contents(public_path('css/menu-print.css')) !!}
    </style>
</head>
@php
    $layout          = $config['layout']         ?? 'classic';
    $showDesc        = (bool) ($config['descriptions']    ?? true);
    $showAlrg        = (bool) ($config['allergens']       ?? true);
    $showAlrgIcons   = (bool) ($config['allergenIcons']   ?? true);
    $showLegend      = (bool) ($config['allergenLegend']  ?? true);
    $paperClass      = 'paper-'  . ($config['paper']      ?? 'A4');
    $layoutClass     = 'layout-' . $layout;
    $colorClass      = 'colors-' . ($config['colors']     ?? 'brand');
    $pageWidthClass  = 'pg-'     . ($config['pageWidth']  ?? 'standard');

    // EU 14 allergen icon map: slugged key → [CSS modifier, 2-letter code, full label]
    $allergenIconMap = [
        'gluten'                 => ['gl', 'GL', 'Gluten'],
        'crustaceans'            => ['cr', 'CR', 'Crustaceans'],
        'crustacean'             => ['cr', 'CR', 'Crustaceans'],
        'eggs'                   => ['eg', 'EG', 'Eggs'],
        'egg'                    => ['eg', 'EG', 'Eggs'],
        'fish'                   => ['fi', 'FI', 'Fish'],
        'peanuts'                => ['pn', 'PN', 'Peanuts'],
        'peanut'                 => ['pn', 'PN', 'Peanuts'],
        'soybeans'               => ['sy', 'SY', 'Soybeans'],
        'soya-beans'             => ['sy', 'SY', 'Soybeans'],
        'soybean'                => ['sy', 'SY', 'Soybeans'],
        'soy'                    => ['sy', 'SY', 'Soybeans'],
        'milk'                   => ['ml', 'ML', 'Milk'],
        'dairy'                  => ['ml', 'ML', 'Milk'],
        'nuts'                   => ['nt', 'NT', 'Nuts'],
        'nut'                    => ['nt', 'NT', 'Nuts'],
        'celery'                 => ['ce', 'CE', 'Celery'],
        'mustard'                => ['ms', 'MS', 'Mustard'],
        'sesame'                 => ['se', 'SE', 'Sesame'],
        'sesame-seeds'           => ['se', 'SE', 'Sesame'],
        'sulphites'              => ['su', 'SU', 'Sulphites'],
        'sulphur-dioxide'        => ['su', 'SU', 'Sulphites'],
        'sulphur-dioxide-and-sulphites' => ['su', 'SU', 'Sulphites'],
        'lupin'                  => ['lu', 'LU', 'Lupin'],
        'molluscs'               => ['mo', 'MO', 'Molluscs'],
        'mollusc'                => ['mo', 'MO', 'Molluscs'],
    ];

    // Helper: get icon data for a tag key
    $getIcon = function (string $key) use ($allergenIconMap): array {
        return $allergenIconMap[$key] ?? ['xx', strtoupper(substr($key, 0, 2)), ucfirst($key)];
    };

    $extraLangDescs = $extraLangDescs ?? [];
    $usedAllergens  = $usedAllergens  ?? [];

    // Language label map for multi-lang badges
    $langLabels = ['en' => 'EN', 'it' => 'IT', 'de' => 'DE'];
    $primaryLang = $config['lang'] ?? 'en';
    $extraLangs  = array_slice($config['langs'] ?? [], 1);
@endphp
<body class="{{ $layoutClass }} {{ $colorClass }} {{ $paperClass }} {{ $pageWidthClass }}">

{{-- Screen-only white card wrapper --}}
<div class="mp-doc">

@if($layout === 'elegant')
<div class="mp-page-wrapper">
@endif

{{-- ── HEADER ── --}}
<header class="mp-header">
    <h1>{{ $config['title'] }}</h1>
    @if(!empty($config['subtitle']))
        <p class="subtitle">{{ $config['subtitle'] }}</p>
    @endif
    @if(!empty($config['address']) || !empty($config['phone']))
        <p class="contact-line">
            @if(!empty($config['address'])){{ $config['address'] }}@endif
            @if(!empty($config['address']) && !empty($config['phone'])) &nbsp;·&nbsp; @endif
            @if(!empty($config['phone'])){{ $config['phone'] }}@endif
        </p>
    @endif
    @if(count($config['langs'] ?? []) > 1)
        <p class="mp-lang-badge" style="margin-top:0.35rem;">
            {{ implode(' · ', array_map(fn($l) => strtoupper($l), $config['langs'])) }}
        </p>
    @endif
</header>

{{-- ── MENU SECTIONS ── --}}
@forelse($sections as $section)
    @php $items = $section['items'] ?? []; @endphp

    <div class="mp-section">
        <h2 class="mp-section-title">{{ $section['title'] ?? '' }}</h2>

        @if($layout === 'modern')
            <div class="mp-items-grid">
        @endif

        @foreach($items as $item)
            @php
                $name         = $item['name']        ?? '';
                $price        = $item['price']        ?? '';
                $description  = $item['description']  ?? '';
                $allTags      = array_merge($item['allergies'] ?? [], $item['intolerances'] ?? []);
            @endphp

            <div class="mp-item">
                @if($layout === 'classic')
                    {{-- ── Classic ── --}}
                    <div class="mp-item-row">
                        <span class="mp-item-name">{{ $name }}</span>
                        <span class="mp-item-dots"></span>
                        <span class="mp-item-price">{{ $price }}</span>
                    </div>

                    @if($showDesc && $description !== '')
                        <p class="mp-item-description">
                            {{ $description }}
                            @if($showAlrg && !$showAlrgIcons && count($allTags))
                                <span class="mp-item-allergy-inline">({{ implode(', ', array_column($allTags, 'key')) }})</span>
                            @endif
                        </p>
                    @elseif($showAlrg && !$showAlrgIcons && count($allTags))
                        <p class="mp-item-description">
                            <span class="mp-item-allergy-inline">({{ implode(', ', array_column($allTags, 'key')) }})</span>
                        </p>
                    @endif

                    {{-- Allergen icons row (classic) --}}
                    @if($showAlrg && $showAlrgIcons && count($allTags))
                        <div class="mp-ai-row">
                            @foreach($allTags as $tag)
                                @php [$mod, $code, $lbl] = $getIcon($tag['key'] ?? ''); @endphp
                                <span class="mp-ai mp-ai-{{ $mod }}" title="{{ $lbl }}">{{ $code }}</span>
                            @endforeach
                        </div>
                    @endif

                    {{-- Extra language descriptions (classic) --}}
                    @foreach($extraLangs as $eLang)
                        @php $eDesc = $extraLangDescs[$eLang][$name] ?? ''; @endphp
                        @if($showDesc && $eDesc !== '')
                            <p class="mp-item-description mp-lang-desc">
                                <span class="mp-lang-badge">{{ strtoupper($eLang) }}</span>
                                {{ $eDesc }}
                            </p>
                        @endif
                    @endforeach

                @else
                    {{-- ── Elegant & Modern ── --}}
                    <div class="mp-item-row">
                        <span class="mp-item-name">{{ $name }}</span>
                        <span class="mp-item-price">{{ $price }}</span>
                    </div>

                    @if($showDesc && $description !== '')
                        <p class="mp-item-description">{{ $description }}</p>
                    @endif

                    {{-- Extra language descriptions (elegant/modern) --}}
                    @foreach($extraLangs as $eLang)
                        @php $eDesc = $extraLangDescs[$eLang][$name] ?? ''; @endphp
                        @if($showDesc && $eDesc !== '')
                            <p class="mp-item-description mp-lang-desc">
                                <span class="mp-lang-badge">{{ strtoupper($eLang) }}</span>
                                {{ $eDesc }}
                            </p>
                        @endif
                    @endforeach

                    {{-- Allergen icons (elegant/modern) --}}
                    @if($showAlrg && count($allTags))
                        @if($showAlrgIcons)
                            <div class="mp-ai-row">
                                @foreach($allTags as $tag)
                                    @php [$mod, $code, $lbl] = $getIcon($tag['key'] ?? ''); @endphp
                                    <span class="mp-ai mp-ai-{{ $mod }}" title="{{ $lbl }}">{{ $code }}</span>
                                @endforeach
                            </div>
                        @else
                            <div class="mp-tags">
                                @foreach($allTags as $tag)
                                    <span class="mp-tag">{{ $tag['key'] }}</span>
                                @endforeach
                            </div>
                        @endif
                    @endif
                @endif
            </div>
        @endforeach

        @if($layout === 'modern')
            </div>{{-- /mp-items-grid --}}
        @endif
    </div>
@empty
    <p style="text-align:center;color:#999;font-style:italic;margin-top:3rem;">
        No menu items found. Add items in the admin panel.
    </p>
@endforelse

{{-- ── FOOTER ── --}}
@if(!empty($config['footer']) || ($showLegend && !empty($usedAllergens)))
    <footer class="mp-footer">
        @if(!empty($config['footer']))
            <p>{{ $config['footer'] }}</p>
        @endif

        @if($showLegend && !empty($usedAllergens))
            <div class="mp-allergen-legend">
                <div class="mp-legend-grid">
                    @foreach($usedAllergens as $key => $label)
                        @php [$mod, $code, $lbl] = $getIcon((string) $key); @endphp
                        <span class="mp-legend-item">
                            <span class="mp-ai mp-ai-{{ $mod }}">{{ $code }}</span>
                            {{ $lbl }}
                        </span>
                    @endforeach
                </div>
            </div>
        @endif
    </footer>
@endif

@if($layout === 'elegant')
</div>{{-- /mp-page-wrapper --}}
@endif

</div>{{-- /mp-doc --}}
</body>
</html>
