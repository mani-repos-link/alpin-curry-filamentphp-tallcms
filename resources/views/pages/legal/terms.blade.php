@extends('layouts.alpin-curry')

@section('title', __('site.legal_page.terms_title').' | '.__('site.brand'))
@section('meta_description', __('site.legal_page.terms_text'))

@section('content')
    <main>
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.terms') }}</span>
            <h1>{{ __('site.legal_page.terms_title') }}</h1>
            <p>{{ __('site.legal_page.terms_text') }}</p>
        </section>

        <section class="section">
            <div class="container legal-doc reveal">
                <article class="legal-card legal-section">
                    <h3>Agreement</h3>
                    <p>By accessing or using this website, you agree to these Terms and Conditions. If you do not agree, please stop using the website. These terms may be updated from time to time; continued use after changes are posted constitutes acceptance of the revised terms.</p>
                    <p><strong>Last updated:</strong> 1 March 2026</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Definitions</h3>
                    <table class="legal-table">
                        <tbody>
                            <tr>
                                <th>Alpin Curry</th>
                                <td>{{ $restaurantLegalName }}, {{ $restaurantAddressLine }}. Also referred to as "we", "us" or "our".</td>
                            </tr>
                            <tr>
                                <th>Service</th>
                                <td>The website, reservation request system, menu information, and all information provided through this website.</td>
                            </tr>
                            <tr>
                                <th>User</th>
                                <td>Any visitor using the website who is not employed by Alpin Curry. Also referred to as "you".</td>
                            </tr>
                            <tr>
                                <th>Website</th>
                                <td>The website currently in use, including alpincurry.it and any associated subdomains.</td>
                            </tr>
                        </tbody>
                    </table>
                </article>

                <article class="legal-card legal-section">
                    <h3>Use of the Website</h3>
                    <ul>
                        <li>You must use this website only for lawful purposes and in a manner that does not infringe the rights of others.</li>
                        <li>You must not attempt to gain unauthorised access to any part of the website or its underlying systems.</li>
                        <li>You must not submit false, misleading or fraudulent information through any forms on the website.</li>
                        <li>Automated scraping, crawling or harvesting of content from this website without prior written permission is prohibited.</li>
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>Intellectual Property</h3>
                    <p>All content on this website — including text, graphics, logos, photographs, videos and code — is protected by applicable intellectual property law and remains the property of Alpin Curry or its licensors. Reproduction, redistribution or commercial use without prior written permission is prohibited.</p>
                    <p>Menu items, dish names, recipes and images are proprietary. You may share links to this website but may not reproduce content for commercial purposes.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Table Reservations</h3>
                    <ul>
                        <li>Reservation requests submitted through this website or via WhatsApp are requests only, not confirmed bookings, until you receive explicit confirmation from us by telephone or email.</li>
                        <li>We reserve the right to decline a reservation request at our discretion, particularly during peak periods or when capacity does not permit.</li>
                        <li>If you need to cancel or modify a reservation, please notify us as soon as possible by telephone or email. Late cancellations (within 2 hours of the reservation time) may result in us being unable to accommodate other guests — we ask for your consideration in this regard.</li>
                        <li>If we are unable to honour a confirmed reservation due to unforeseen circumstances, we will notify you by the contact details provided and will make reasonable efforts to offer an alternative time.</li>
                        <li>Reservation requests must be made by persons aged 18 or over.</li>
                        <li>Walk-in guests are welcome subject to availability.</li>
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>Menu, Prices and Availability</h3>
                    <ul>
                        <li>Menu items and prices displayed on this website are for informational purposes and may differ from the in-restaurant menu. The in-restaurant menu shall prevail at the time of dining.</li>
                        <li>All prices include VAT where applicable under Italian law.</li>
                        <li>Menu items are subject to seasonal availability. We reserve the right to substitute an item with a reasonable alternative and will inform you if a dish on your order is unavailable.</li>
                        <li>The website does not currently support online ordering or online payment. All orders are placed and settled in person at the restaurant.</li>
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>Allergen and Dietary Information</h3>
                    <p><strong>Important notice:</strong> In compliance with EU Regulation No. 1169/2011 and the applicable Italian implementing provisions, allergen information for our dishes is available:</p>
                    <ul>
                        <li>On our printed and digital menu, where indicated.</li>
                        <li>On request from our staff at any time.</li>
                    </ul>
                    <p>The 14 regulated allergens include: gluten, crustaceans, eggs, fish, peanuts, soya, milk/dairy, nuts, celery, mustard, sesame, sulphur dioxide/sulphites, lupin and molluscs.</p>
                    <p><strong>If you or a member of your party has a food allergy, intolerance or other dietary requirement, please inform a member of staff before ordering.</strong> Whilst we take all reasonable precautions, our kitchen handles multiple allergens and we cannot guarantee a completely allergen-free environment. We accept no liability for reactions resulting from failure to declare an allergy prior to ordering.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Liability and Disclaimers</h3>
                    <p>This website is provided on an "as is" and "as available" basis. We make reasonable efforts to keep information accurate and up to date, but we make no warranty as to the completeness, accuracy or reliability of any content.</p>
                    <p>To the maximum extent permitted by applicable law (including Italian Legislative Decree 206/2005 — Consumer Code), Alpin Curry excludes liability for indirect, incidental and consequential loss arising from use of this website or reliance on its content.</p>
                    <p>Nothing in these terms limits or excludes liability for:</p>
                    <ul>
                        <li>Death or personal injury caused by our negligence.</li>
                        <li>Fraud or fraudulent misrepresentation.</li>
                        <li>Any other liability that cannot be excluded or limited under Italian or EU law.</li>
                        <li>Statutory consumer rights that cannot be waived under Italian Legislative Decree 206/2005.</li>
                    </ul>
                </article>

                <article class="legal-card legal-section">
                    <h3>Third-Party Links</h3>
                    <p>This website may contain links to third-party websites (such as Google Maps or WhatsApp). We are not responsible for the content or privacy practices of those websites. Links are provided for convenience only and do not constitute endorsement.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Changes to These Terms</h3>
                    <p>We may update these Terms and Conditions from time to time. We will post the updated version on this page with a revised "Last updated" date. Where changes are material, we will endeavour to draw them to your attention. Continued use of the website after changes are posted constitutes your acceptance of the revised terms.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Governing Law and Jurisdiction</h3>
                    <p>These Terms and Conditions are governed by Italian law. Any disputes arising out of or in connection with these terms shall be subject to the non-exclusive jurisdiction of the courts of Italy, specifically the court competent for the jurisdiction of {{ $restaurantAddress['city'] ?? 'Merano' }}.</p>
                    <p>If you are a consumer resident in another EU member state, you may also have the right to bring proceedings in the courts of your country of residence, and mandatory consumer protection rules of your country of residence may apply.</p>
                    <p>The binding language of these Terms and Conditions is Italian. Translations into other languages are provided for convenience only.</p>
                </article>

                <article class="legal-card legal-section">
                    <h3>Contact</h3>
                    <p><strong>{{ $restaurantLegalName }}</strong><br>{{ $restaurantAddressLine }}</p>
                    <p>Email: <a href="mailto:{{ $restaurantContact['email'] ?? '' }}">{{ $restaurantContact['email'] ?? '' }}</a></p>
                    <p>Phone: {{ $restaurantContact['phone_display'] ?? '' }}</p>
                </article>
            </div>
        </section>
    </main>
@endsection
