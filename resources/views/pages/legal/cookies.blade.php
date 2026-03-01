@extends('layouts.alpin-curry')

@section('title', __('site.legal_page.cookies_title').' | '.__('site.brand'))
@section('meta_description', __('site.legal_page.cookies_text'))

@section('content')
    <main id="main-content">
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.cookies') }}</span>
            <h1>{{ __('site.legal_page.cookies_title') }}</h1>
            <p>{{ __('legal.cookies.page_intro') }}</p>
        </section>

        <section class="section">
            <div class="container legal-doc reveal">

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.cookies.about.title') }}</h3>
                    <p>{{ __('legal.cookies.about.body') }}</p>
                    <p><strong>{{ __('site.legal_page.last_updated', [], null) ?: 'Last updated' }}:</strong> {{ __('legal.cookies.about.updated') }}</p>
                    <p>{{ __('legal.cookies.about.privacy_ref') }}
                        <a href="{{ route('legal.privacy', ['locale' => app()->getLocale()]) }}">{{ __('site.nav.privacy') }}</a>.
                    </p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.cookies.what_is.title') }}</h3>
                    <p>{{ __('legal.cookies.what_is.body') }}</p>
                    <p>{{ __('legal.cookies.what_is.note') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.cookies.legal_basis.title') }}</h3>
                    <p>{{ __('legal.cookies.legal_basis.body') }}</p>
                    <p>{{ __('legal.cookies.legal_basis.when_you_visit') }}</p>
                    <ul>
                        <li>{{ __('legal.cookies.legal_basis.option_all') }}</li>
                        <li>{{ __('legal.cookies.legal_basis.option_nec') }}</li>
                    </ul>
                    <p>{{ __('legal.cookies.legal_basis.storage_note') }}</p>
                    <p>
                        <button
                            type="button"
                            id="cookie-manage-btn"
                            onclick="document.getElementById('cookie-consent-banner').style.display='flex'; this.style.display='none';"
                            style="cursor:pointer; background:transparent; border:1px solid currentColor; border-radius:4px; padding:0.5em 1.2em; font-size:inherit;"
                        >
                            {{ __('legal.cookies.legal_basis.manage_btn') }}
                        </button>
                    </p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.cookies.categories.title') }}</h3>
                    <table class="legal-table">
                        <thead>
                            <tr>
                                <th>{{ __('legal.cookies.categories.col_category') }}</th>
                                <th>{{ __('legal.cookies.categories.col_consent') }}</th>
                                <th>{{ __('legal.cookies.categories.col_purpose') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ __('legal.cookies.categories.necessary_label') }}</td>
                                <td>{{ __('legal.cookies.categories.necessary_consent') }}</td>
                                <td>{{ __('legal.cookies.categories.necessary_purpose') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('legal.cookies.categories.functional_label') }}</td>
                                <td>{{ __('legal.cookies.categories.functional_consent') }}</td>
                                <td>{{ __('legal.cookies.categories.functional_purpose') }}</td>
                            </tr>
                            <tr>
                                <td>{{ __('legal.cookies.categories.analytics_label') }}</td>
                                <td>{{ __('legal.cookies.categories.analytics_consent') }}</td>
                                <td>{{ __('legal.cookies.categories.analytics_purpose') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.cookies.list.title') }}</h3>
                    <table class="legal-table">
                        <thead>
                            <tr>
                                <th>{{ __('legal.cookies.list.col_cookie') }}</th>
                                <th>{{ __('legal.cookies.list.col_category') }}</th>
                                <th>{{ __('legal.cookies.list.col_purpose') }}</th>
                                <th>{{ __('legal.cookies.list.col_duration') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>XSRF-TOKEN</td>
                                <td>{{ __('legal.cookies.list.cat_necessary') }}</td>
                                <td>{{ __('legal.cookies.list.xsrf_purpose') }}</td>
                                <td>{{ __('legal.cookies.list.duration_session') }}</td>
                            </tr>
                            <tr>
                                <td>{{ config('session.cookie', 'laravel_session') }}</td>
                                <td>{{ __('legal.cookies.list.cat_necessary') }}</td>
                                <td>{{ __('legal.cookies.list.session_purpose') }}</td>
                                <td>{{ __('legal.cookies.list.duration_session') }}</td>
                            </tr>
                            <tr>
                                <td>alpin_cookie_consent</td>
                                <td>{{ __('legal.cookies.list.cat_functional') }}</td>
                                <td>{{ __('legal.cookies.list.consent_purpose') }}</td>
                                <td>{{ __('legal.cookies.list.duration_12m') }}</td>
                            </tr>
                            <tr>
                                <td>_ga</td>
                                <td>{{ __('legal.cookies.list.cat_analytics') }}</td>
                                <td>{{ __('legal.cookies.list.ga_purpose') }}</td>
                                <td>{{ __('legal.cookies.list.duration_2y') }}</td>
                            </tr>
                            <tr>
                                <td>_gid</td>
                                <td>{{ __('legal.cookies.list.cat_analytics') }}</td>
                                <td>{{ __('legal.cookies.list.gid_purpose') }}</td>
                                <td>{{ __('legal.cookies.list.duration_24h') }}</td>
                            </tr>
                            <tr>
                                <td>_gat</td>
                                <td>{{ __('legal.cookies.list.cat_analytics') }}</td>
                                <td>{{ __('legal.cookies.list.gat_purpose') }}</td>
                                <td>{{ __('legal.cookies.list.duration_1m') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.cookies.analytics.title') }}</h3>
                    <p>{{ __('legal.cookies.analytics.body') }}</p>
                    <p>
                        {{ __('legal.cookies.analytics.optout_label') }}
                        <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">https://tools.google.com/dlpage/gaoptout</a>
                    </p>
                    <p>
                        {{ __('legal.cookies.analytics.privacy_label') }}
                        <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">https://policies.google.com/privacy</a>
                    </p>
                    <p>{{ __('legal.cookies.analytics.transfers') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.cookies.browser.title') }}</h3>
                    <p>{{ __('legal.cookies.browser.intro') }}</p>
                    <ul>
                        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">{{ __('legal.cookies.browser.chrome') }}</a></li>
                        <li><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener">{{ __('legal.cookies.browser.firefox') }}</a></li>
                        <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank" rel="noopener">{{ __('legal.cookies.browser.safari') }}</a></li>
                        <li><a href="https://support.microsoft.com/en-us/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener">{{ __('legal.cookies.browser.edge') }}</a></li>
                    </ul>
                    <p>{{ __('legal.cookies.browser.warning') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.cookies.withdraw.title') }}</h3>
                    <p>{{ __('legal.cookies.withdraw.intro') }}</p>
                    <ul>
                        @foreach(__('legal.cookies.withdraw.items') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p>{{ __('legal.cookies.withdraw.note') }}</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>{{ __('legal.cookies.changes.title') }}</h3>
                    <p>{{ __('legal.cookies.changes.body') }}</p>
                    <p>{{ __('legal.cookies.contact_footer') }}
                        <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a>
                    </p>
                </article>

            </div>
        </section>
    </main>
@endsection
