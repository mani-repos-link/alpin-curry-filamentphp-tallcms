@extends('layouts.alpin-curry')

@section('title', __('site.legal_page.impressum_title').' | '.__('site.brand'))
@section('meta_description', __('site.legal_page.impressum_text'))

@section('content')
    <main>
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.impressum') }}</span>
            <h1>{{ __('site.legal_page.impressum_title') }}</h1>
            <p>Company and contact information in accordance with legal disclosure requirements (Art. 2250 c.c. and D.Lgs. 70/2003).</p>
        </section>

        <section class="section">
            <div class="container legal-doc reveal">
                <article class="legal-card legal-section">
                    <h3>Business Name and Address</h3>
                    <p><strong>{{ $restaurantLegalName }}</strong></p>
                    <address style="font-style: normal;">
                        {{ $restaurantAddress['street'] ?? '' }} {{ $restaurantAddress['street_number'] ?? '' }}<br>
                        {{ $restaurantAddress['postal_code'] ?? '' }} {{ $restaurantAddress['city'] ?? '' }} ({{ $restaurantAddress['state'] ?? '' }})<br>
                        {{ $restaurantAddress['region'] ?? '' }}, {{ $restaurantAddress['country'] ?? 'Italy' }}
                    </address>
                </article>

                <article class="legal-card legal-section">
                    <h3>Contact Information</h3>
                    <ul>
                        <li><strong>Email:</strong> <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a></li>
                        @if (!empty($restaurantContact['pec_email']))
                            <li><strong>PEC (Certified Email):</strong> {{ $restaurantContact['pec_email'] }}</li>
                        @endif
                        <li><strong>Phone:</strong> <a href="tel:{{ $restaurantPhoneHref }}">{{ $restaurantContact['phone_display'] ?? '' }}</a></li>
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>Company Registration Details</h3>
                    <ul>
                        @if (!empty($restaurantLegal['vat_id']))
                            <li><strong>VAT Number (Partita IVA):</strong> {{ $restaurantLegal['vat_id'] }}</li>
                        @else
                            <li><strong>VAT Number (Partita IVA):</strong> <em>Available on request or displayed in the restaurant.</em></li>
                        @endif

                        @if (!empty($restaurantLegal['identity_id']))
                            <li><strong>Tax Code / REA Number:</strong> {{ $restaurantLegal['identity_id'] }}</li>
                        @endif

                        @if (!empty($restaurantLegal['codice_destinatario']))
                            <li><strong>Codice destinatario (e-invoice):</strong> {{ $restaurantLegal['codice_destinatario'] }}</li>
                        @endif
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>Legal Representative</h3>
                    <p>The business is represented by its legal representative(s) as registered with the competent Camera di Commercio. For formal legal communications, please use the contact details above or contact us in writing at the address listed.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Supervisory Authority</h3>
                    <p>Food service activities are subject to regulation by the competent local health authority (ASL/APSS) for the Province of {{ $restaurantAddress['state'] ?? 'BZ' }}, Autonomous Province of Bolzano/Bozen.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Legal Notice and Liability for Content</h3>
                    <p>The content of this website has been compiled with care and to the best of our knowledge. However, we cannot accept any liability for the completeness, accuracy or currency of information provided.</p>
                    <p>We are not responsible for the content of external websites linked from this website. The operators of those websites are solely responsible for their content. At the time of linking, no legal violations were evident. If we become aware of any infringements, the links will be removed immediately.</p>
                    <p>In accordance with D.Lgs. 70/2003 (Electronic Commerce Decree), this website is operated as an information society service by {{ $restaurantLegalName }}.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Copyright</h3>
                    <p>All content on this website — texts, photographs, graphics, logos and videos — is protected by Italian and EU copyright law. Reproduction or use, in whole or in part, requires prior written permission from {{ $restaurantLegalName }}.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Dispute Resolution</h3>
                    <p>The European Commission provides an Online Dispute Resolution (ODR) platform for consumers within the EU: <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener">https://ec.europa.eu/consumers/odr</a></p>
                    <p>We are not obliged to participate in alternative dispute resolution procedures before a consumer arbitration board, but we are willing to discuss resolutions directly. Please contact us at the address above.</p>
                </article>
            </div>
        </section>
    </main>
@endsection
