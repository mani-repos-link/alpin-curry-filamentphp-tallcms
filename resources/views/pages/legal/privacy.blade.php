@extends('layouts.alpin-curry')

@section('title', __('site.legal_page.privacy_title').' | '.__('site.brand'))
@section('meta_description', __('site.legal_page.privacy_text'))

@section('content')
    <main id="main-content">
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.privacy') }}</span>
            <h1>{{ __('site.legal_page.privacy_title') }}</h1>
            <p>{{ __('legal.privacy.page_intro') }}</p>
        </section>

        <section class="section">
            <div class="container legal-doc reveal">

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.scope.title') }}</h3>
                    <p>{{ __('legal.privacy.scope.body') }}</p>
                    <p><strong>{{ __('site.legal_page.last_updated', [], null) ?: 'Last updated' }}:</strong> {{ __('legal.privacy.scope.updated') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.controller.title') }}</h3>
                    <p><strong>{{ __('legal.privacy.controller.label') }}:</strong> {{ $restaurantLegalName }}, {{ $restaurantAddressLine }}.</p>
                    <p><strong>{{ __('legal.privacy.controller.contact_label') }}:</strong> <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a></p>
                    <p><strong>{{ __('legal.privacy.controller.framework_label') }}:</strong> {{ __('legal.privacy.controller.framework_body') }}</p>
                    <p>{{ __('legal.privacy.controller.dpo_note') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.collect.title') }}</h3>
                    <ul>
                        @foreach(__('legal.privacy.collect.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p>{{ __('legal.privacy.collect.children_note') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.collection_method.title') }}</h3>
                    <ul>
                        @foreach(__('legal.privacy.collection_method.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.bases.title') }}</h3>
                    <ul>
                        @foreach(__('legal.privacy.bases.items') as $item)
                            <li><strong>{{ $item['label'] }}</strong> ({{ $item['ref'] }}) — {{ $item['body'] }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.disclosure.title') }}</h3>
                    <p>{{ __('legal.privacy.disclosure.intro') }}</p>
                    <ul>
                        @foreach(__('legal.privacy.disclosure.items') as $item)
                            <li><strong>{{ $item['label'] }}</strong> — {{ $item['body'] }}</li>
                        @endforeach
                    </ul>
                    <p>{{ __('legal.privacy.disclosure.no_sell') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.retention.title') }}</h3>
                    <ul>
                        @foreach(__('legal.privacy.retention.items') as $item)
                            <li><strong>{{ $item['label'] }}</strong> — {{ $item['body'] }}</li>
                        @endforeach
                    </ul>
                    <p>{{ __('legal.privacy.retention.note') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.rights.title') }}</h3>
                    <p>{{ __('legal.privacy.rights.intro') }}</p>
                    <ul>
                        @foreach(__('legal.privacy.rights.items') as $item)
                            <li><strong>{{ $item['label'] }}</strong> — {{ $item['body'] }}</li>
                        @endforeach
                    </ul>
                    <p>{{ __('legal.privacy.rights.contact_note') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.dpa.title') }}</h3>
                    <p>{{ __('legal.privacy.dpa.intro') }}</p>
                    <p>
                        <strong>{{ __('legal.privacy.dpa.authority_name') }}</strong><br>
                        {{ __('legal.privacy.dpa.authority_address') }}<br>
                        <a href="{{ __('legal.privacy.dpa.authority_website') }}" target="_blank" rel="noopener">{{ __('legal.privacy.dpa.authority_website') }}</a>
                    </p>
                    <p>{{ __('legal.privacy.dpa.note') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.security.title') }}</h3>
                    <p>{{ __('legal.privacy.security.safeguards') }}</p>
                    <p>{{ __('legal.privacy.security.breach') }}</p>
                    <p>{{ __('legal.privacy.security.transfers') }}</p>
                    <p>{{ __('legal.privacy.security.profiling') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.allergen.title') }}</h3>
                    <p>{{ __('legal.privacy.allergen.body') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.changes.title') }}</h3>
                    <p>{{ __('legal.privacy.changes.body') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.privacy.contact.title') }}</h3>
                    <p><strong>{{ $restaurantLegalName }}</strong><br>{{ $restaurantAddressLine }}</p>
                    <p>Email: <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a></p>
                    @if (!empty($restaurantContact['pec_email']))
                        <p>PEC: {{ $restaurantContact['pec_email'] }}</p>
                    @endif
                </article>

            </div>
        </section>
    </main>
@endsection
