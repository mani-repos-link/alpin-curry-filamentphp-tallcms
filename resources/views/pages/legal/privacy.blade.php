@extends('layouts.alpin-curry')

@section('title', __('site.legal_page.privacy_title').' | '.__('site.brand'))
@section('meta_description', __('site.legal_page.privacy_text'))

@section('content')
    <main>
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.privacy') }}</span>
            <h1>{{ __('site.legal_page.privacy_title') }}</h1>
            <p>This policy describes how Alpin Curry handles personal data when you use our website and services.</p>
        </section>

        <section class="section">
            <div class="container legal-doc reveal">
                <article class="legal-card legal-section">
                    <h3>Policy Scope</h3>
                    <p>This policy applies between website users and Alpin Curry as website owner and service provider.</p>
                    <p><strong>Last updated:</strong> 1 March 2026</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Controller and Regulation</h3>
                    <p><strong>Data Controller:</strong> {{ $restaurantLegalName }}, {{ $restaurantAddressLine }}.</p>
                    <p><strong>Contact for data matters:</strong> <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a></p>
                    <p><strong>Legal framework:</strong> Regulation (EU) 2016/679 (GDPR) and Italian Legislative Decree 196/2003 (Codice in materia di protezione dei dati personali), as amended by Legislative Decree 101/2018.</p>
                    <p>No Data Protection Officer (DPO) is formally required for this type of business activity. For data protection enquiries please use the contact above.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>What We Collect</h3>
                    <ul>
                        <li>Identity and contact data such as name, phone number and email address, collected when you submit a reservation request or contact us.</li>
                        <li>Reservation details such as date, time, number of guests and any notes you provide.</li>
                        <li>Technical and usage data such as IP address, browser type and pages visited, collected automatically when you browse the website.</li>
                        <li>Cookie and tracking data as described in our <a href="{{ route('legal.cookies', ['locale' => app()->getLocale()]) }}">Cookie Policy</a>.</li>
                    </ul>
                    <p>We do not knowingly collect data from children under the age of 16. If you believe a child has submitted personal data, please contact us immediately.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>How Data Is Collected</h3>
                    <ul>
                        <li>Directly from you via reservation forms, telephone calls and email.</li>
                        <li>Automatically via cookies and similar technologies when you visit the website (see Cookie Policy for details and how to manage your preferences).</li>
                        <li>From public sources where required for legal compliance checks.</li>
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>Legal Bases for Processing</h3>
                    <ul>
                        <li><strong>Contract performance</strong> (Art. 6(1)(b) GDPR) — for handling reservation requests and related communications.</li>
                        <li><strong>Consent</strong> (Art. 6(1)(a) GDPR) — for analytics cookies and optional marketing communications. Consent may be withdrawn at any time without affecting the lawfulness of prior processing.</li>
                        <li><strong>Legal obligation</strong> (Art. 6(1)(c) GDPR) — for tax, accounting and regulatory requirements.</li>
                        <li><strong>Legitimate interests</strong> (Art. 6(1)(f) GDPR) — for website security, fraud prevention and improving service quality, where these interests are not overridden by your rights.</li>
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>Disclosure of Data</h3>
                    <p>Your data may be shared with the following categories of recipients, only to the extent necessary for the stated purpose:</p>
                    <ul>
                        <li><strong>Hosting and IT providers</strong> — to operate and maintain the website and email infrastructure.</li>
                        <li><strong>Analytics providers</strong> (where you have consented) — such as Google Analytics for aggregated website usage statistics.</li>
                        <li><strong>Professional advisors</strong> — accountants and legal counsel acting under confidentiality obligations.</li>
                        <li><strong>Public authorities</strong> — where required by law or valid legal order.</li>
                    </ul>
                    <p>We do not sell or rent your personal data to third parties.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Data Retention</h3>
                    <ul>
                        <li><strong>Reservation data</strong> — retained for up to 24 months from the reservation date for service and dispute resolution purposes.</li>
                        <li><strong>Accounting and tax records</strong> — retained for 10 years in accordance with Italian fiscal law (D.P.R. 633/1972 and D.P.R. 600/1973).</li>
                        <li><strong>Analytics data</strong> — retained in accordance with the analytics provider's retention settings (Google Analytics default: 14 months).</li>
                        <li><strong>Cookie consent records</strong> — retained for up to 12 months.</li>
                    </ul>
                    <p>After the applicable retention period, data is securely deleted or anonymised.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Your Rights Under GDPR</h3>
                    <p>You have the following rights regarding your personal data:</p>
                    <ul>
                        <li><strong>Right of access</strong> — request a copy of the personal data we hold about you.</li>
                        <li><strong>Right to rectification</strong> — request correction of inaccurate or incomplete data.</li>
                        <li><strong>Right to erasure</strong> — request deletion of your data where there is no legitimate reason to continue processing it.</li>
                        <li><strong>Right to restriction</strong> — request that we restrict processing in certain circumstances.</li>
                        <li><strong>Right to data portability</strong> — receive your data in a structured, machine-readable format where technically feasible.</li>
                        <li><strong>Right to object</strong> — object to processing based on legitimate interests or for direct marketing.</li>
                        <li><strong>Right to withdraw consent</strong> — withdraw consent at any time for consent-based processing. This does not affect the lawfulness of processing before withdrawal.</li>
                    </ul>
                    <p>To exercise any of these rights, contact us at <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a>. We will respond within 30 days.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Right to Lodge a Complaint</h3>
                    <p>You have the right to lodge a complaint with the competent data protection supervisory authority at any time. In Italy, this is:</p>
                    <p>
                        <strong>Garante per la protezione dei dati personali</strong><br>
                        Piazza Venezia 11, 00187 Roma, Italy<br>
                        Website: <a href="https://www.garanteprivacy.it" target="_blank" rel="noopener">www.garanteprivacy.it</a>
                    </p>
                    <p>You may also lodge a complaint with the supervisory authority of the EU member state in which you are habitually resident or where the alleged infringement occurred.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Security and International Transfers</h3>
                    <p>We apply appropriate technical and organisational measures to protect personal data against unauthorised access, loss or destruction. Access to personal data is restricted to authorised personnel only.</p>
                    <p>In the event of a personal data breach that is likely to result in a risk to your rights and freedoms, we will notify the competent supervisory authority within 72 hours of becoming aware of the breach, in accordance with Art. 33 GDPR.</p>
                    <p>We do not transfer personal data outside the European Economic Area (EEA) as standard practice. Where analytics services involve data transfers to countries outside the EEA (such as the United States), such transfers are covered by the EU Standard Contractual Clauses or equivalent safeguards under Art. 46 GDPR.</p>
                    <p>We do not use automated decision-making or profiling that produces legal or similarly significant effects.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Allergen and Dietary Information</h3>
                    <p>If you provide information about food allergies, dietary requirements or health conditions in connection with a reservation, this constitutes special category data under Art. 9 GDPR. We process such information solely for the purpose of accommodating your needs and ensuring your safety. This data is not shared beyond the kitchen and service team involved in your reservation.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Changes to This Policy</h3>
                    <p>We may update this Privacy Policy from time to time. Material changes will be posted on this page with an updated date. Continued use of the website after changes are posted constitutes acceptance of the revised policy.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Contact</h3>
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
