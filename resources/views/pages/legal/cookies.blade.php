@extends('layouts.alpin-curry')

@section('title', __('site.legal_page.cookies_title').' | '.__('site.brand'))
@section('meta_description', __('site.legal_page.cookies_text'))

@section('content')
    <main>
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.cookies') }}</span>
            <h1>{{ __('site.legal_page.cookies_title') }}</h1>
            <p>Information about cookies and similar technologies used on this website.</p>
        </section>

        <section class="section">
            <div class="container legal-doc reveal">
                <article class="legal-card legal-section">
                    <h3>About This Policy</h3>
                    <p>This Cookie Policy explains what cookies are, which ones we use, why we use them, and how you can control them.</p>
                    <p><strong>Last updated:</strong> 1 March 2026</p>
                    <p>This policy should be read alongside our <a href="{{ route('legal.privacy', ['locale' => app()->getLocale()]) }}">Privacy Policy</a>.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>What Is a Cookie?</h3>
                    <p>Cookies are small text files placed on your device by websites you visit. They are widely used to make websites work, or work more efficiently, and to provide analytics and personalisation information to website owners.</p>
                    <p>We may also use similar tracking technologies such as local storage for storing your cookie consent preference on your device.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Legal Basis and Your Consent</h3>
                    <p>Under GDPR (Regulation (EU) 2016/679) and Italian Legislative Decree 69/2012 (ePrivacy), <strong>non-essential cookies require your prior, informed, and freely given consent</strong> before they are placed on your device.</p>
                    <p>When you first visit our website, a cookie consent banner is displayed. You may:</p>
                    <ul>
                        <li><strong>Accept all</strong> — allow both strictly necessary and analytics cookies.</li>
                        <li><strong>Accept necessary only</strong> — allow only cookies that are essential for the website to function. No analytics data will be collected.</li>
                    </ul>
                    <p>Your preference is stored locally on your device for up to 12 months. You may change your preference at any time by using the button below or clearing your browser cookies.</p>
                    <p>
                        <button
                            type="button"
                            id="cookie-manage-btn"
                            onclick="document.getElementById('cookie-consent-banner').style.display='flex'; this.style.display='none';"
                            style="cursor:pointer; background:transparent; border:1px solid currentColor; border-radius:4px; padding:0.5em 1.2em; font-size:inherit;"
                        >
                            Manage Cookie Preferences
                        </button>
                    </p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Cookie Categories</h3>
                    <table class="legal-table">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Consent Required?</th>
                                <th>Purpose</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Strictly Necessary</strong></td>
                                <td>No — always active</td>
                                <td>Essential for the website to function. Includes CSRF security tokens and session management. Cannot be disabled.</td>
                            </tr>
                            <tr>
                                <td><strong>Functionality</strong></td>
                                <td>No — always active</td>
                                <td>Stores your cookie consent preference so we do not ask you on every page.</td>
                            </tr>
                            <tr>
                                <td><strong>Analytics and Performance</strong></td>
                                <td><strong>Yes — opt-in required</strong></td>
                                <td>Measures anonymous usage trends and helps us improve website content. Loaded only after you accept analytics cookies.</td>
                            </tr>
                        </tbody>
                    </table>
                </article>

                <article class="legal-card legal-section">
                    <h3>Cookies We Use</h3>
                    <table class="legal-table">
                        <thead>
                            <tr>
                                <th>Cookie / Key</th>
                                <th>Category</th>
                                <th>Purpose</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>XSRF-TOKEN</td>
                                <td>Strictly Necessary</td>
                                <td>Cross-site request forgery protection for form submissions.</td>
                                <td>Session</td>
                            </tr>
                            <tr>
                                <td>alpin_curry_session</td>
                                <td>Strictly Necessary</td>
                                <td>Maintains your web session.</td>
                                <td>Session</td>
                            </tr>
                            <tr>
                                <td>alpin_cookie_consent (localStorage)</td>
                                <td>Functionality</td>
                                <td>Stores your cookie consent choice so the banner is not shown on every visit.</td>
                                <td>12 months</td>
                            </tr>
                            <tr>
                                <td>_ga</td>
                                <td>Analytics (opt-in)</td>
                                <td>Google Analytics — distinguishes unique users for anonymous visit measurement.</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td>_gid</td>
                                <td>Analytics (opt-in)</td>
                                <td>Google Analytics — groups user behaviour for 24-hour analytics.</td>
                                <td>24 hours</td>
                            </tr>
                            <tr>
                                <td>_gat</td>
                                <td>Analytics (opt-in)</td>
                                <td>Google Analytics — throttles request rate to the analytics server.</td>
                                <td>1 minute</td>
                            </tr>
                        </tbody>
                    </table>
                </article>

                <article class="legal-card legal-section">
                    <h3>Analytics and Third-Party Services</h3>
                    <p>We use Google Analytics (operated by Google LLC) to understand how visitors use this website. Analytics cookies are only loaded after you give your consent. The data collected is anonymised and aggregated — it is not used to identify you personally.</p>
                    <p>
                        Google Analytics opt-out:
                        <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">https://tools.google.com/dlpage/gaoptout</a>
                    </p>
                    <p>
                        Google Privacy Policy:
                        <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">https://policies.google.com/privacy</a>
                    </p>
                    <p>Data transferred to Google may be processed in the United States. Google LLC participates in the EU-US Data Privacy Framework and provides appropriate safeguards under Art. 46 GDPR.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>How to Manage Cookies in Your Browser</h3>
                    <p>In addition to using our consent banner, you can control and delete cookies directly in your browser. Please refer to your browser's help documentation:</p>
                    <ul>
                        <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome — Manage cookies</a></li>
                        <li><a href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" target="_blank" rel="noopener">Mozilla Firefox — Manage cookies</a></li>
                        <li><a href="https://support.apple.com/en-gb/guide/safari/sfri11471/mac" target="_blank" rel="noopener">Apple Safari — Manage cookies</a></li>
                        <li><a href="https://support.microsoft.com/en-us/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener">Microsoft Edge — Manage cookies</a></li>
                    </ul>
                    <p>Note that blocking all cookies may impair website functionality, including the ability to submit reservation forms.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Withdrawing Consent</h3>
                    <p>You may withdraw your consent to analytics cookies at any time by:</p>
                    <ul>
                        <li>Clicking the "Manage Cookie Preferences" button above.</li>
                        <li>Clearing your browser's cookies and local storage, which will reset your preference and show the consent banner on your next visit.</li>
                        <li>Installing the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a>.</li>
                    </ul>
                    <p>Withdrawing consent does not affect the lawfulness of any processing carried out before withdrawal.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Changes to This Policy</h3>
                    <p>This policy may be updated periodically to reflect changes in technology, law, or our practices. Please check this page regularly. Where changes are material, we will update the "Last updated" date at the top of this page.</p>
                    <p>For cookie-related questions: <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a>, {{ $restaurantLegalName }}, {{ $restaurantAddressLine }}.</p>
                </article>
            </div>
        </section>
    </main>
@endsection
