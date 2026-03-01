<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
    $locale = app()->getLocale();

    $themeOptions = config('alpin_themes.options', []);
    $defaultTheme = config('alpin_themes.default', 'saffron-classic');
    $currentTheme = $defaultTheme;
    if (! array_key_exists($currentTheme, $themeOptions)) {
        $currentTheme = array_key_first($themeOptions) ?? 'saffron-classic';
    }

    $currentRoute = Route::currentRouteName() ?? 'home';
@endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('site.brand'))</title>
    <meta name="description" content="@yield('meta_description', __('site.brand'))">
    <meta property="og:title" content="@yield('title', __('site.brand'))">
    <meta property="og:description" content="@yield('meta_description', __('site.brand'))">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets/images/dishes/image.png') }}">
    <meta name="theme-color" content="{{ $themeOptions[$currentTheme]['color'] }}">
    <link rel="icon" href="{{ asset($restaurantBrand['favicon_path'] ?? 'favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset($restaurantBrand['favicon_32_path'] ?? 'favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset($restaurantBrand['favicon_16_path'] ?? 'favicon-16x16.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset($restaurantBrand['apple_touch_icon_path'] ?? 'apple-touch-icon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/alpin-curry-site.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body data-theme="{{ $currentTheme }}">
    <a class="skip-link" href="#main-content">{{ __('site.nav.skip_to_content') }}</a>

    @include('partials.header', [
        'locale' => $locale,
        'currentRoute' => $currentRoute,
    ])

    @yield('content')

    @include('partials.footer')

    @include('partials.whatsapp-fab')

    @include('partials.cookie-consent')

    <script>
        const revealElements = document.querySelectorAll('.reveal');
        const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (reducedMotion) {
            revealElements.forEach((el) => el.classList.add('active'));
        } else {
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('active');
                            observer.unobserve(entry.target);
                        }
                    });
                },
                { threshold: 0.14 }
            );

            revealElements.forEach((el) => observer.observe(el));
        }
    </script>
    @stack('scripts')
</body>
</html>
