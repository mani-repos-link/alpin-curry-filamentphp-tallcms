<header class="topbar">
    <div class="container topbar-inner">
        <a href="{{ route('home', ['locale' => $locale]) }}" class="brand">
            <img
                class="brand-logo"
                src="{{ asset($restaurantBrand['logo_primary_path'] ?? 'assets/images/logos/logo_ori.png') }}"
                alt="{{ $restaurantName }} logo"
                width="170"
                height="86"
                decoding="async"
            >
            <span class="sr-only">{{ $restaurantName }}</span>
        </a>

        @include('partials.navigation', [
            'locale' => $locale,
            'currentRoute' => $currentRoute,
        ])
    </div>
</header>
