@extends('layouts.alpin-curry')

@section('title', __('site.menu_page.title').' | '.__('site.brand'))
@section('meta_description', __('site.menu_page.subtitle'))

@section('content')
    <main id="main-content">
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.menu') }}</span>
            <h1>{{ __('site.menu_page.title') }}</h1>
            <p>{{ __('site.menu_page.subtitle') }}</p>
        </section>

        <section class="section">
            <div class="container menu-section-grid">
                @forelse ($menuSections as $section)
                    <article class="menu-table reveal">
                        <h3>{{ $section['title'] }}</h3>
                        @foreach ($section['items'] as $item)
                            <div class="menu-row">
                                <div class="menu-row-top">
                                    <span>{{ $item['name'] }}</span>
                                    <span>{{ $item['price'] }}</span>
                                </div>
                                <p>{{ $item['description'] }}</p>
                                @if (! empty($item['allergies']) || ! empty($item['intolerances']))
                                    <div class="menu-tags">
                                        @foreach (($item['allergies'] ?? []) as $allergy)
                                            <span class="menu-tag">
                                                @if (file_exists(public_path('assets/images/allergies/'.$allergy['key'].'.png')))
                                                    <img src="{{ asset('assets/images/allergies/'.$allergy['key'].'.png') }}" alt="{{ $allergy['label'] }}">
                                                @endif
                                                {{ $allergy['label'] }}
                                            </span>
                                        @endforeach
                                        @foreach (($item['intolerances'] ?? []) as $intolerance)
                                            <span class="menu-tag menu-tag-intolerance">{{ $intolerance['label'] }}</span>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </article>
                @empty
                    <article class="menu-table">
                        <h3>{{ __('site.menu_page.title') }}</h3>
                        <p>{{ __('site.menu_page.empty') }}</p>
                    </article>
                @endforelse
            </div>
        </section>

        <section class="section">
            <div class="container legal-grid">
                <article class="legal-card reveal">
                    <h3>{{ __('site.menu_page.allergies_title') }}</h3>
                    <div class="dietary-legend">
                        @foreach (($dietary['allergies'] ?? []) as $allergy)
                            <div class="dietary-item">
                                @if (file_exists(public_path('assets/images/allergies/'.$allergy['key'].'.png')))
                                    <img src="{{ asset('assets/images/allergies/'.$allergy['key'].'.png') }}" alt="{{ $allergy['label'] }}">
                                @endif
                                <span>{{ $allergy['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </article>
                <article class="legal-card reveal">
                    <h3>{{ __('site.menu_page.intolerances_title') }}</h3>
                    <div class="dietary-legend">
                        @foreach (($dietary['intolerances'] ?? []) as $intolerance)
                            <div class="dietary-item">
                                <span>{{ $intolerance['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </article>
                <article class="legal-card reveal">
                    <h3>{{ __('site.menu_page.ingredients_title') }}</h3>
                    <div class="dietary-legend">
                        @foreach (($dietary['ingredients'] ?? []) as $ingredient)
                            <div class="dietary-item">
                                <span>{{ $ingredient['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </article>
            </div>
        </section>
    </main>
@endsection
