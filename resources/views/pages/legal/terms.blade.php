@extends('layouts.alpin-curry')

@section('title', __('site.legal_page.terms_title').' | '.__('site.brand'))
@section('meta_description', __('site.legal_page.terms_text'))

@section('content')
    <main id="main-content">
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.terms') }}</span>
            <h1>{{ __('site.legal_page.terms_title') }}</h1>
            <p>{{ __('legal.terms.page_intro') }}</p>
        </section>

        <section class="section">
            <div class="container legal-doc reveal">

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.agreement.title') }}</h3>
                    <p>{{ __('legal.terms.agreement.body') }}</p>
                    <p><strong>{{ __('site.legal_page.last_updated', [], null) ?: 'Last updated' }}:</strong> {{ __('legal.terms.agreement.updated') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.definitions.title') }}</h3>
                    <table class="legal-table">
                        <tbody>
                            <tr>
                                <th>Alpin Curry</th>
                                <td>{{ $restaurantLegalName }}, {{ $restaurantAddressLine }}. {{ __('legal.terms.definitions.alpin_curry') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('legal.terms.definitions.service_label') }}</th>
                                <td>{{ __('legal.terms.definitions.service_body') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('legal.terms.definitions.user_label') }}</th>
                                <td>{{ __('legal.terms.definitions.user_body') }}</td>
                            </tr>
                            <tr>
                                <th>{{ __('legal.terms.definitions.website_label') }}</th>
                                <td>{{ __('legal.terms.definitions.website_body') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.use.title') }}</h3>
                    <ul>
                        @foreach(__('legal.terms.use.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.ip.title') }}</h3>
                    <p>{{ __('legal.terms.ip.body') }}</p>
                    <p>{{ __('legal.terms.ip.note') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.reservations.title') }}</h3>
                    <ul>
                        @foreach(__('legal.terms.reservations.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.menu.title') }}</h3>
                    <ul>
                        @foreach(__('legal.terms.menu.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.allergen.title') }}</h3>
                    <p>{{ __('legal.terms.allergen.compliance') }}</p>
                    <ul>
                        @foreach(__('legal.terms.allergen.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p>{{ __('legal.terms.allergen.allergen_list') }}</p>
                    <p><strong>{{ __('legal.terms.allergen.warning') }}</strong></p>
                    <p>{{ __('legal.terms.allergen.disclaimer') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.liability.title') }}</h3>
                    <p>{{ __('legal.terms.liability.as_is') }}</p>
                    <p>{{ __('legal.terms.liability.limit') }}</p>
                    <p>{{ __('legal.terms.liability.exclusions_intro') }}</p>
                    <ul>
                        @foreach(__('legal.terms.liability.exclusions') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.links.title') }}</h3>
                    <p>{{ __('legal.terms.links.body') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.changes.title') }}</h3>
                    <p>{{ __('legal.terms.changes.body') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.law.title') }}</h3>
                    <p>{{ __('legal.terms.law.body', ['city' => $restaurantAddress['city'] ?? 'Merano']) }}</p>
                    <p>{{ __('legal.terms.law.consumer_note') }}</p>
                    <p>{{ __('legal.terms.law.language_note') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.terms.contact.title') }}</h3>
                    <p><strong>{{ $restaurantLegalName }}</strong><br>{{ $restaurantAddressLine }}</p>
                    <p>Email: <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a></p>
                    <p>{{ __('site.contact.phone_label') }}: {{ $restaurantContact['phone_display'] ?? '' }}</p>
                </article>

            </div>
        </section>
    </main>
@endsection
