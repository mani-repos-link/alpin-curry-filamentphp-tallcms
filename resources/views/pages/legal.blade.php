@extends('layouts.alpin-curry')

@section('title', __('site.legal_page.title').' | '.__('site.brand'))
@section('meta_description', __('site.legal_page.subtitle'))

@section('content')
    <main id="main-content">
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.legal') }}</span>
            <h1>{{ __('site.legal_page.title') }}</h1>
            <p>{{ __('site.legal_page.subtitle') }}</p>
        </section>

        <section class="section">
            <div class="container legal-grid">
                <article class="legal-card reveal">
                    <h3>{{ __('site.legal_page.privacy_title') }}</h3>
                    <p>{{ __('site.legal_page.privacy_text') }}</p>
                    <a class="btn btn-ghost" href="{{ route('legal.privacy', ['locale' => app()->getLocale()]) }}">
                        {{ __('site.nav.privacy') }}
                    </a>
                </article>
                <article class="legal-card reveal">
                    <h3>{{ __('site.legal_page.cookies_title') }}</h3>
                    <p>{{ __('site.legal_page.cookies_text') }}</p>
                    <a class="btn btn-ghost" href="{{ route('legal.cookies', ['locale' => app()->getLocale()]) }}">
                        {{ __('site.nav.cookies') }}
                    </a>
                </article>
                <article class="legal-card reveal">
                    <h3>{{ __('site.legal_page.impressum_title') }}</h3>
                    <p>{{ __('site.legal_page.impressum_text') }}</p>
                    <a class="btn btn-ghost" href="{{ route('legal.impressum', ['locale' => app()->getLocale()]) }}">
                        {{ __('site.nav.impressum') }}
                    </a>
                </article>
                <article class="legal-card reveal">
                    <h3>{{ __('site.legal_page.terms_title') }}</h3>
                    <p>{{ __('site.legal_page.terms_text') }}</p>
                    <a class="btn btn-ghost" href="{{ route('legal.terms', ['locale' => app()->getLocale()]) }}">
                        {{ __('site.nav.terms') }}
                    </a>
                </article>
            </div>
        </section>
    </main>
@endsection
