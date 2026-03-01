{{--
    Cookie Consent Banner
    - Translated via lang/{locale}/legal.php under the 'consent' key
    - Uses localStorage key "alpin_cookie_consent" with values "all" or "necessary"
    - Only loads Google Analytics if consent is "all"
    - Banner is hidden once a choice is stored (12 months)
--}}
@php
    $cookieUrl  = route('legal.cookies',  ['locale' => app()->getLocale()]);
    $privacyUrl = route('legal.privacy',  ['locale' => app()->getLocale()]);
@endphp

<style>
    #cookie-consent-banner {
        position: fixed;
        inset: auto 0 0 0;
        z-index: 9999;
        background: #1a1a1a;
        color: #f5f5f5;
        padding: 1.25rem 1.5rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
        flex-wrap: wrap;
        box-shadow: 0 -4px 24px rgba(0,0,0,0.35);
        font-size: 0.875rem;
        line-height: 1.5;
    }
    #cookie-consent-banner p {
        margin: 0;
        flex: 1 1 260px;
        max-width: 640px;
    }
    #cookie-consent-banner a {
        color: #f5c842;
        text-underline-offset: 3px;
    }
    .cookie-consent-actions {
        display: flex;
        gap: 0.625rem;
        flex-wrap: wrap;
        flex-shrink: 0;
    }
    .cookie-btn {
        cursor: pointer;
        padding: 0.5rem 1.25rem;
        border-radius: 4px;
        font-size: 0.875rem;
        font-weight: 600;
        border: 2px solid transparent;
        transition: opacity 0.15s;
        white-space: nowrap;
    }
    .cookie-btn:hover { opacity: 0.85; }
    .cookie-btn-accept-all  { background: #f5c842; color: #1a1a1a; border-color: #f5c842; }
    .cookie-btn-necessary   { background: transparent; color: #f5f5f5; border-color: #555; }
</style>

<div id="cookie-consent-banner" role="dialog" aria-label="{{ __('legal.consent.aria_label') }}" aria-live="polite" style="display:none;">
    <p>
        {{ __('legal.consent.text') }}
        <a href="{{ $cookieUrl }}">{{ __('legal.consent.cookie_link') }}</a>
        {{ __('legal.consent.and') }}
        <a href="{{ $privacyUrl }}">{{ __('legal.consent.privacy_link') }}</a>.
    </p>
    <div class="cookie-consent-actions">
        <button type="button" class="cookie-btn cookie-btn-necessary" id="cookie-btn-necessary">
            {{ __('legal.consent.necessary') }}
        </button>
        <button type="button" class="cookie-btn cookie-btn-accept-all" id="cookie-btn-accept-all">
            {{ __('legal.consent.accept_all') }}
        </button>
    </div>
</div>

<script>
(function () {
    'use strict';

    var CONSENT_KEY  = 'alpin_cookie_consent';
    var CONSENT_DAYS = 365;

    function getConsent() {
        try {
            var raw = localStorage.getItem(CONSENT_KEY);
            if (!raw) return null;
            var data = JSON.parse(raw);
            if (!data || !data.value || !data.expires) return null;
            if (Date.now() > data.expires) { localStorage.removeItem(CONSENT_KEY); return null; }
            return data.value;
        } catch (e) { return null; }
    }

    function setConsent(value) {
        try {
            localStorage.setItem(CONSENT_KEY, JSON.stringify({
                value:   value,
                expires: Date.now() + CONSENT_DAYS * 86400000
            }));
        } catch (e) {}
    }

    function loadAnalytics() {
        // Replace 'G-XXXXXXXXXX' with your actual Google Analytics Measurement ID.
        // Analytics are NEVER loaded until the user clicks "Accept All".
        var GA_ID = 'G-XXXXXXXXXX';
        if (!GA_ID || GA_ID === 'G-XXXXXXXXXX') return;

        var s = document.createElement('script');
        s.async = true;
        s.src = 'https://www.googletagmanager.com/gtag/js?id=' + GA_ID;
        document.head.appendChild(s);

        window.dataLayer = window.dataLayer || [];
        function gtag() { window.dataLayer.push(arguments); }
        window.gtag = gtag;
        gtag('js', new Date());
        gtag('config', GA_ID, { anonymize_ip: true });
    }

    function hideBanner() {
        var b = document.getElementById('cookie-consent-banner');
        if (b) b.style.display = 'none';
        var btn = document.getElementById('cookie-manage-btn');
        if (btn) btn.style.display = '';
    }

    function showBanner() {
        var b = document.getElementById('cookie-consent-banner');
        if (b) b.style.display = 'flex';
        var btn = document.getElementById('cookie-manage-btn');
        if (btn) btn.style.display = 'none';
    }

    function init() {
        var consent = getConsent();
        if (consent === 'all')       { loadAnalytics(); hideBanner(); return; }
        if (consent === 'necessary') { hideBanner(); return; }
        showBanner();
    }

    document.addEventListener('DOMContentLoaded', function () {
        var btnAll = document.getElementById('cookie-btn-accept-all');
        var btnNec = document.getElementById('cookie-btn-necessary');

        if (btnAll) btnAll.addEventListener('click', function () {
            setConsent('all'); loadAnalytics(); hideBanner();
        });
        if (btnNec) btnNec.addEventListener('click', function () {
            setConsent('necessary'); hideBanner();
        });

        init();
    });
}());
</script>
