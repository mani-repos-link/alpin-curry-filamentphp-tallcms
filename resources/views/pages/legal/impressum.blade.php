@extends('layouts.alpin-curry')

@section('title', __('site.legal_page.impressum_title').' | '.__('site.brand'))
@section('meta_description', __('site.legal_page.impressum_text'))

@section('content')
    <main id="main-content">
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.impressum') }}</span>
            <h1>{{ __('site.legal_page.impressum_title') }}</h1>
            <p>{{ __('legal.impressum.page_intro') }}</p>
        </section>

        <section class="section">
            <div class="container legal-doc reveal">

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.impressum.owner.title') }}</h3>
                    <p><strong>{{ $restaurantLegalName }}</strong></p>
                    <address style="font-style: normal;">
                        {{ $restaurantAddress['street'] ?? '' }} {{ $restaurantAddress['street_number'] ?? '' }}<br>
                        {{ $restaurantAddress['postal_code'] ?? '' }} {{ $restaurantAddress['city'] ?? '' }} ({{ $restaurantAddress['state'] ?? '' }})<br>
                        {{ $restaurantAddress['region'] ?? '' }}, {{ $restaurantAddress['country'] ?? 'Italy' }}
                    </address>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.impressum.contact.title') }}</h3>
                    <ul>
                        <li>
                            <strong>{{ __('legal.impressum.contact.email') }}:</strong>
                            <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a>
                        </li>
                        @if (!empty($restaurantContact['pec_email']))
                            <li>
                                <strong>{{ __('legal.impressum.contact.pec') }}:</strong>
                                {{ $restaurantContact['pec_email'] }}
                            </li>
                        @endif
                        <li>
                            <strong>{{ __('legal.impressum.contact.phone') }}:</strong>
                            <a href="tel:{{ $restaurantPhoneHref }}">{{ $restaurantContact['phone_display'] ?? '' }}</a>
                        </li>
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.impressum.company.title') }}</h3>
                    <ul>
                        <li>
                            <strong>{{ __('legal.impressum.company.vat') }}:</strong>
                            @if (!empty($restaurantLegal['vat_id']))
                                {{ $restaurantLegal['vat_id'] }}
                            @else
                                <em>{{ __('legal.impressum.company.vat_missing') }}</em>
                            @endif
                        </li>
                        @if (!empty($restaurantLegal['identity_id']))
                            <li>
                                <strong>{{ __('legal.impressum.company.tax') }}:</strong>
                                {{ $restaurantLegal['identity_id'] }}
                            </li>
                        @endif
                        @if (!empty($restaurantLegal['codice_destinatario']))
                            <li>
                                <strong>{{ __('legal.impressum.company.codice') }}:</strong>
                                {{ $restaurantLegal['codice_destinatario'] }}
                            </li>
                        @endif
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.impressum.representative.title') }}</h3>
                    <p>{{ __('legal.impressum.representative.body') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.impressum.authority.title') }}</h3>
                    <p>{{ __('legal.impressum.authority.body', ['state' => $restaurantAddress['state'] ?? 'BZ']) }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.impressum.legal_notice.title') }}</h3>
                    <p>{{ __('legal.impressum.legal_notice.accuracy') }}</p>
                    <p>{{ __('legal.impressum.legal_notice.links') }}</p>
                    <p>{{ __('legal.impressum.legal_notice.decree', ['name' => $restaurantLegalName]) }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.impressum.copyright.title') }}</h3>
                    <p>{{ __('legal.impressum.copyright.body', ['name' => $restaurantLegalName]) }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.impressum.odr.title') }}</h3>
                    <p>
                        {{ __('legal.impressum.odr.eu_odr') }}
                        <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener">https://ec.europa.eu/consumers/odr</a>
                    </p>
                    <p>{{ __('legal.impressum.odr.note') }}</p>
                </article>

            </div>
        </section>
    </main>
@endsection
