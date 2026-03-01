<footer class="footer" role="contentinfo">
    @php
        $footerRoute = $currentRoute ?? (Route::currentRouteName() ?? 'home');
    @endphp

    <div class="footer-wrap">
        <div class="footer-grid">
            <div class="footer-brand-block footer-panel">
                <img
                    class="footer-logo"
                    src="{{ asset($restaurantBrand['logo_primary_path'] ?? 'assets/images/gallery/angular-extra/logos/logo_ori.png') }}"
                    alt="{{ $restaurantName }} logo"
                    width="200"
                    height="101"
                    loading="lazy"
                    decoding="async"
                >
                <h3>{{ __('site.footer.line_1') }}</h3>
                <p>{{ __('site.footer.line_2') }}</p>
                <a class="btn btn-primary footer-cta" href="{{ $restaurantWhatsappUrl }}" target="_blank" rel="noopener">
                    {{ __('site.footer.whatsapp_fab') }}
                </a>
            </div>

            <nav class="footer-links footer-panel" aria-label="{{ __('site.footer.aria_nav') }}">
                <h3>{{ __('site.footer.quick_links') }}</h3>
                <a href="{{ route('home', ['locale' => $locale]) }}" @if ($footerRoute === 'home') aria-current="page" @endif>{{ __('site.nav.home') }}</a>
                <a href="{{ route('menu', ['locale' => $locale]) }}" @if ($footerRoute === 'menu') aria-current="page" @endif>{{ __('site.nav.menu') }}</a>
                <a href="{{ route('gallery', ['locale' => $locale]) }}" @if ($footerRoute === 'gallery') aria-current="page" @endif>{{ __('site.nav.gallery') }}</a>
                <a href="{{ route('faq', ['locale' => $locale]) }}" @if ($footerRoute === 'faq') aria-current="page" @endif>{{ __('site.nav.faq') }}</a>
                <a href="{{ route('legal.privacy', ['locale' => $locale]) }}">{{ __('site.nav.privacy') }}</a>
                <a href="{{ route('legal.cookies', ['locale' => $locale]) }}">{{ __('site.nav.cookies') }}</a>
                <a href="{{ route('legal.terms', ['locale' => $locale]) }}">{{ __('site.nav.terms') }}</a>
                <a href="{{ route('legal.impressum', ['locale' => $locale]) }}">{{ __('site.nav.impressum') }}</a>
            </nav>

            <div class="footer-contact footer-panel">
                <h3>{{ __('site.footer.contact_title') }}</h3>
                <p>{{ $restaurantAddressLine }}</p>
                <a href="tel:{{ $restaurantPhoneHref }}">{{ $restaurantContact['phone_display'] ?? '' }}</a>
                <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a>
            </div>

            <div class="footer-hours footer-panel">
                <h3>{{ __('site.footer.hours_title') }}</h3>
                <p>{{ __('site.hours.mon') }}</p>
                <p>{{ __('site.hours.week') }}</p>
            </div>
        </div>
        <div class="footer-base">
            <span>{{ __('site.footer.copyright', ['year' => date('Y')]) }}</span>
{{--            <a href="{{ route('legal', ['locale' => $locale]) }}">{{ __('site.nav.legal') }}</a>--}}
        </div>
    </div>
</footer>
