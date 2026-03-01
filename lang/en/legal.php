<?php

return [

    // ─── Privacy Policy ──────────────────────────────────────────────────────
    'privacy' => [
        'page_intro'  => 'This policy describes how Alpin Curry handles personal data when you use our website and services.',
        'scope' => [
            'title'   => 'Policy Scope',
            'body'    => 'This policy applies between website users and Alpin Curry as website owner and service provider.',
            'updated' => '1 March 2026',
        ],
        'controller' => [
            'title'           => 'Controller and Regulation',
            'label'           => 'Data Controller',
            'contact_label'   => 'Contact for data matters',
            'framework_label' => 'Legal framework',
            'framework_body'  => 'Regulation (EU) 2016/679 (GDPR) and Italian Legislative Decree 196/2003 (Codice in materia di protezione dei dati personali), as amended by Legislative Decree 101/2018.',
            'dpo_note'        => 'No Data Protection Officer (DPO) is formally required for this type of business activity. For data protection enquiries please use the contact above.',
        ],
        'collect' => [
            'title'         => 'What We Collect',
            'items'         => [
                'identity'    => 'Identity and contact data such as name, phone number and email address, collected when you submit a reservation request or contact us.',
                'reservation' => 'Reservation details such as date, time, number of guests and any notes you provide.',
                'technical'   => 'Technical and usage data such as IP address, browser type and pages visited, collected automatically when you browse the website.',
                'cookies'     => 'Cookie and tracking data as described in our Cookie Policy.',
            ],
            'children_note' => 'We do not knowingly collect data from children under the age of 16. If you believe a child has submitted personal data, please contact us immediately.',
        ],
        'collection_method' => [
            'title' => 'How Data Is Collected',
            'items' => [
                'forms'  => 'Directly from you via reservation forms, telephone calls and email.',
                'auto'   => 'Automatically via cookies and similar technologies when you visit the website (see Cookie Policy for details and how to manage your preferences).',
                'public' => 'From public sources where required for legal compliance checks.',
            ],
        ],
        'bases' => [
            'title' => 'Legal Bases for Processing',
            'items' => [
                'contract'   => ['label' => 'Contract performance',  'ref' => 'Art. 6(1)(b) GDPR', 'body' => 'for handling reservation requests and related communications.'],
                'consent'    => ['label' => 'Consent',               'ref' => 'Art. 6(1)(a) GDPR', 'body' => 'for analytics cookies and optional marketing communications. Consent may be withdrawn at any time without affecting the lawfulness of prior processing.'],
                'obligation' => ['label' => 'Legal obligation',      'ref' => 'Art. 6(1)(c) GDPR', 'body' => 'for tax, accounting and regulatory requirements.'],
                'interest'   => ['label' => 'Legitimate interests',  'ref' => 'Art. 6(1)(f) GDPR', 'body' => 'for website security, fraud prevention and improving service quality, where these interests are not overridden by your rights.'],
            ],
        ],
        'disclosure' => [
            'title'   => 'Disclosure of Data',
            'intro'   => 'Your data may be shared with the following categories of recipients, only to the extent necessary for the stated purpose:',
            'items'   => [
                'hosting'     => ['label' => 'Hosting and IT providers',                       'body' => 'to operate and maintain the website and email infrastructure.'],
                'analytics'   => ['label' => 'Analytics providers (where you have consented)', 'body' => 'such as Google Analytics for aggregated website usage statistics.'],
                'advisors'    => ['label' => 'Professional advisors',                          'body' => 'accountants and legal counsel acting under confidentiality obligations.'],
                'authorities' => ['label' => 'Public authorities',                             'body' => 'where required by law or valid legal order.'],
            ],
            'no_sell' => 'We do not sell or rent your personal data to third parties.',
        ],
        'retention' => [
            'title' => 'Data Retention',
            'items' => [
                'reservation' => ['label' => 'Reservation data',         'body' => 'retained for up to 24 months from the reservation date for service and dispute resolution purposes.'],
                'tax'         => ['label' => 'Accounting and tax records','body' => 'retained for 10 years in accordance with Italian fiscal law (D.P.R. 633/1972 and D.P.R. 600/1973).'],
                'analytics'   => ['label' => 'Analytics data',           'body' => 'retained in accordance with the analytics provider\'s retention settings (Google Analytics default: 14 months).'],
                'consent'     => ['label' => 'Cookie consent records',   'body' => 'retained for up to 12 months.'],
            ],
            'note' => 'After the applicable retention period, data is securely deleted or anonymised.',
        ],
        'rights' => [
            'title'        => 'Your Rights Under GDPR',
            'intro'        => 'You have the following rights regarding your personal data:',
            'items'        => [
                'access'      => ['label' => 'Right of access',           'body' => 'request a copy of the personal data we hold about you.'],
                'rectify'     => ['label' => 'Right to rectification',    'body' => 'request correction of inaccurate or incomplete data.'],
                'erasure'     => ['label' => 'Right to erasure',          'body' => 'request deletion of your data where there is no legitimate reason to continue processing it.'],
                'restriction' => ['label' => 'Right to restriction',      'body' => 'request that we restrict processing in certain circumstances.'],
                'portability' => ['label' => 'Right to data portability', 'body' => 'receive your data in a structured, machine-readable format where technically feasible.'],
                'object'      => ['label' => 'Right to object',           'body' => 'object to processing based on legitimate interests or for direct marketing.'],
                'withdraw'    => ['label' => 'Right to withdraw consent', 'body' => 'withdraw consent at any time for consent-based processing. This does not affect the lawfulness of processing before withdrawal.'],
            ],
            'contact_note' => 'To exercise any of these rights, contact us at the email below. We will respond within 30 days.',
        ],
        'dpa' => [
            'title'             => 'Right to Lodge a Complaint',
            'intro'             => 'You have the right to lodge a complaint with the competent data protection supervisory authority at any time. In Italy, this is:',
            'authority_name'    => 'Garante per la protezione dei dati personali',
            'authority_address' => 'Piazza Venezia 11, 00187 Roma, Italy',
            'authority_website' => 'https://www.garanteprivacy.it',
            'note'              => 'You may also lodge a complaint with the supervisory authority of the EU member state in which you are habitually resident or where the alleged infringement occurred.',
        ],
        'security' => [
            'title'      => 'Security and International Transfers',
            'safeguards' => 'We apply appropriate technical and organisational measures to protect personal data against unauthorised access, loss or destruction. Access to personal data is restricted to authorised personnel only.',
            'breach'     => 'In the event of a personal data breach that is likely to result in a risk to your rights and freedoms, we will notify the competent supervisory authority within 72 hours of becoming aware of the breach, in accordance with Art. 33 GDPR.',
            'transfers'  => 'We do not transfer personal data outside the European Economic Area (EEA) as standard practice. Where analytics services involve data transfers to countries outside the EEA (such as the United States), such transfers are covered by the EU Standard Contractual Clauses or equivalent safeguards under Art. 46 GDPR.',
            'profiling'  => 'We do not use automated decision-making or profiling that produces legal or similarly significant effects.',
        ],
        'allergen' => [
            'title' => 'Allergen and Dietary Information',
            'body'  => 'If you provide information about food allergies, dietary requirements or health conditions in connection with a reservation, this constitutes special category data under Art. 9 GDPR. We process such information solely for the purpose of accommodating your needs and ensuring your safety. This data is not shared beyond the kitchen and service team involved in your reservation.',
        ],
        'changes' => [
            'title' => 'Changes to This Policy',
            'body'  => 'We may update this Privacy Policy from time to time. Material changes will be posted on this page with an updated date. Continued use of the website after changes are posted constitutes acceptance of the revised policy.',
        ],
        'contact' => [
            'title' => 'Contact',
        ],
    ],

    // ─── Cookie Policy ───────────────────────────────────────────────────────
    'cookies' => [
        'page_intro' => 'Information about cookies and similar technologies used on this website.',
        'about' => [
            'title'       => 'About This Policy',
            'body'        => 'This Cookie Policy explains what cookies are, which ones we use, why we use them, and how you can control them.',
            'updated'     => '1 March 2026',
            'privacy_ref' => 'This policy should be read alongside our Privacy Policy.',
        ],
        'what_is' => [
            'title' => 'What Is a Cookie?',
            'body'  => 'Cookies are small text files placed on your device by websites you visit. They are widely used to make websites work, or work more efficiently, and to provide analytics and personalisation information to website owners.',
            'note'  => 'We may also use similar tracking technologies such as local storage for storing your cookie consent preference on your device.',
        ],
        'legal_basis' => [
            'title'          => 'Legal Basis and Your Consent',
            'body'           => 'Under GDPR (Regulation (EU) 2016/679) and Italian Legislative Decree 69/2012 (ePrivacy), non-essential cookies require your prior, informed, and freely given consent before they are placed on your device.',
            'when_you_visit' => 'When you first visit our website, a cookie consent banner is displayed. You may:',
            'option_all'     => 'Accept all — allow both strictly necessary and analytics cookies.',
            'option_nec'     => 'Accept necessary only — allow only cookies that are essential for the website to function. No analytics data will be collected.',
            'storage_note'   => 'Your preference is stored locally on your device for up to 12 months. You may change your preference at any time by using the button below or clearing your browser cookies.',
            'manage_btn'     => 'Manage Cookie Preferences',
        ],
        'categories' => [
            'title'              => 'Cookie Categories',
            'col_category'       => 'Category',
            'col_consent'        => 'Consent Required?',
            'col_purpose'        => 'Purpose',
            'necessary_label'    => 'Strictly Necessary',
            'necessary_consent'  => 'No — always active',
            'necessary_purpose'  => 'Essential for the website to function. Includes CSRF security tokens and session management. Cannot be disabled.',
            'functional_label'   => 'Functionality',
            'functional_consent' => 'No — always active',
            'functional_purpose' => 'Stores your cookie consent preference so we do not ask you on every page.',
            'analytics_label'    => 'Analytics and Performance',
            'analytics_consent'  => 'Yes — opt-in required',
            'analytics_purpose'  => 'Measures anonymous usage trends and helps us improve website content. Loaded only after you accept analytics cookies.',
        ],
        'list' => [
            'title'            => 'Cookies We Use',
            'col_cookie'       => 'Cookie / Key',
            'col_category'     => 'Category',
            'col_purpose'      => 'Purpose',
            'col_duration'     => 'Duration',
            'xsrf_purpose'     => 'Cross-site request forgery protection for form submissions.',
            'session_purpose'  => 'Maintains your web session.',
            'consent_purpose'  => 'Stores your cookie consent choice so the banner is not shown on every visit.',
            'ga_purpose'       => 'Google Analytics — distinguishes unique users for anonymous visit measurement.',
            'gid_purpose'      => 'Google Analytics — groups user behaviour for 24-hour analytics.',
            'gat_purpose'      => 'Google Analytics — throttles request rate to the analytics server.',
            'duration_session' => 'Session',
            'duration_12m'     => '12 months',
            'duration_2y'      => '2 years',
            'duration_24h'     => '24 hours',
            'duration_1m'      => '1 minute',
            'cat_necessary'    => 'Strictly Necessary',
            'cat_functional'   => 'Functionality',
            'cat_analytics'    => 'Analytics (opt-in)',
        ],
        'analytics' => [
            'title'         => 'Analytics and Third-Party Services',
            'body'          => 'We use Google Analytics (operated by Google LLC) to understand how visitors use this website. Analytics cookies are only loaded after you give your consent. The data collected is anonymised and aggregated — it is not used to identify you personally.',
            'optout_label'  => 'Google Analytics opt-out:',
            'privacy_label' => 'Google Privacy Policy:',
            'transfers'     => 'Data transferred to Google may be processed in the United States. Google LLC participates in the EU-US Data Privacy Framework and provides appropriate safeguards under Art. 46 GDPR.',
        ],
        'browser' => [
            'title'   => 'How to Manage Cookies in Your Browser',
            'intro'   => 'In addition to using our consent banner, you can control and delete cookies directly in your browser. Please refer to your browser\'s help documentation:',
            'chrome'  => 'Google Chrome — Manage cookies',
            'firefox' => 'Mozilla Firefox — Manage cookies',
            'safari'  => 'Apple Safari — Manage cookies',
            'edge'    => 'Microsoft Edge — Manage cookies',
            'warning' => 'Note that blocking all cookies may impair website functionality, including the ability to submit reservation forms.',
        ],
        'withdraw' => [
            'title' => 'Withdrawing Consent',
            'intro' => 'You may withdraw your consent to analytics cookies at any time by:',
            'items' => [
                'banner'  => 'Clicking the "Manage Cookie Preferences" button above.',
                'clear'   => 'Clearing your browser\'s cookies and local storage, which will reset your preference and show the consent banner on your next visit.',
                'addon'   => 'Installing the Google Analytics Opt-out Browser Add-on.',
            ],
            'note' => 'Withdrawing consent does not affect the lawfulness of any processing carried out before withdrawal.',
        ],
        'changes' => [
            'title' => 'Changes to This Policy',
            'body'  => 'This policy may be updated periodically to reflect changes in technology, law, or our practices. Please check this page regularly. Where changes are material, we will update the "Last updated" date at the top of this page.',
        ],
        'contact_footer' => 'For cookie-related questions contact us at the email below.',
    ],

    // ─── Terms and Conditions ────────────────────────────────────────────────
    'terms' => [
        'page_intro' => 'Conditions governing the use of this website and related services.',
        'agreement' => [
            'title'   => 'Agreement',
            'body'    => 'By accessing or using this website, you agree to these Terms and Conditions. If you do not agree, please stop using the website. These terms may be updated from time to time; continued use after changes are posted constitutes acceptance of the revised terms.',
            'updated' => '1 March 2026',
        ],
        'definitions' => [
            'title'         => 'Definitions',
            'alpin_curry'   => 'Also referred to as "we", "us" or "our".',
            'service_label' => 'Service',
            'service_body'  => 'The website, reservation request system, menu information, and all information provided through this website.',
            'user_label'    => 'User',
            'user_body'     => 'Any visitor using the website who is not employed by Alpin Curry. Also referred to as "you".',
            'website_label' => 'Website',
            'website_body'  => 'The website currently in use, including alpincurry.it and any associated subdomains.',
        ],
        'use' => [
            'title' => 'Use of the Website',
            'items' => [
                'lawful'   => 'You must use this website only for lawful purposes and in a manner that does not infringe the rights of others.',
                'access'   => 'You must not attempt to gain unauthorised access to any part of the website or its underlying systems.',
                'false'    => 'You must not submit false, misleading or fraudulent information through any forms on the website.',
                'scraping' => 'Automated scraping, crawling or harvesting of content from this website without prior written permission is prohibited.',
            ],
        ],
        'ip' => [
            'title' => 'Intellectual Property',
            'body'  => 'All content on this website — including text, graphics, logos, photographs, videos and code — is protected by applicable intellectual property law and remains the property of Alpin Curry or its licensors. Reproduction, redistribution or commercial use without prior written permission is prohibited.',
            'note'  => 'Menu items, dish names, recipes and images are proprietary. You may share links to this website but may not reproduce content for commercial purposes.',
        ],
        'reservations' => [
            'title' => 'Table Reservations',
            'items' => [
                'request'    => 'Reservation requests submitted through this website or via WhatsApp are requests only, not confirmed bookings, until you receive explicit confirmation from us by telephone or email.',
                'decline'    => 'We reserve the right to decline a reservation request at our discretion, particularly during peak periods or when capacity does not permit.',
                'cancel'     => 'If you need to cancel or modify a reservation, please notify us as soon as possible by telephone or email. Late cancellations (within 2 hours of the reservation time) may result in us being unable to accommodate other guests — we ask for your consideration in this regard.',
                'our_cancel' => 'If we are unable to honour a confirmed reservation due to unforeseen circumstances, we will notify you by the contact details provided and will make reasonable efforts to offer an alternative time.',
                'age'        => 'Reservation requests must be made by persons aged 18 or over.',
                'walkin'     => 'Walk-in guests are welcome subject to availability.',
            ],
        ],
        'menu' => [
            'title' => 'Menu, Prices and Availability',
            'items' => [
                'info'     => 'Menu items and prices displayed on this website are for informational purposes and may differ from the in-restaurant menu. The in-restaurant menu shall prevail at the time of dining.',
                'vat'      => 'All prices include VAT where applicable under Italian law.',
                'avail'    => 'Menu items are subject to seasonal availability. We reserve the right to substitute an item with a reasonable alternative and will inform you if a dish is unavailable.',
                'no_order' => 'The website does not currently support online ordering or online payment. All orders are placed and settled in person at the restaurant.',
            ],
        ],
        'allergen' => [
            'title'         => 'Allergen and Dietary Information',
            'compliance'    => 'In compliance with EU Regulation No. 1169/2011 and the applicable Italian implementing provisions, allergen information for our dishes is available:',
            'items'         => [
                'menu'    => 'On our printed and digital menu, where indicated.',
                'request' => 'On request from our staff at any time.',
            ],
            'allergen_list' => 'The 14 regulated allergens include: gluten, crustaceans, eggs, fish, peanuts, soya, milk/dairy, nuts, celery, mustard, sesame, sulphur dioxide/sulphites, lupin and molluscs.',
            'warning'       => 'If you or a member of your party has a food allergy, intolerance or other dietary requirement, please inform a member of staff before ordering.',
            'disclaimer'    => 'Whilst we take all reasonable precautions, our kitchen handles multiple allergens and we cannot guarantee a completely allergen-free environment. We accept no liability for reactions resulting from failure to declare an allergy prior to ordering.',
        ],
        'liability' => [
            'title'             => 'Liability and Disclaimers',
            'as_is'             => 'This website is provided on an "as is" and "as available" basis. We make reasonable efforts to keep information accurate and up to date, but we make no warranty as to the completeness, accuracy or reliability of any content.',
            'limit'             => 'To the maximum extent permitted by applicable law (including Italian Legislative Decree 206/2005 — Consumer Code), Alpin Curry excludes liability for indirect, incidental and consequential loss arising from use of this website or reliance on its content.',
            'exclusions_intro'  => 'Nothing in these terms limits or excludes liability for:',
            'exclusions'        => [
                'death'    => 'Death or personal injury caused by our negligence.',
                'fraud'    => 'Fraud or fraudulent misrepresentation.',
                'law'      => 'Any other liability that cannot be excluded or limited under Italian or EU law.',
                'consumer' => 'Statutory consumer rights that cannot be waived under Italian Legislative Decree 206/2005.',
            ],
        ],
        'links' => [
            'title' => 'Third-Party Links',
            'body'  => 'This website may contain links to third-party websites (such as Google Maps or WhatsApp). We are not responsible for the content or privacy practices of those websites. Links are provided for convenience only and do not constitute endorsement.',
        ],
        'changes' => [
            'title' => 'Changes to These Terms',
            'body'  => 'We may update these Terms and Conditions from time to time. We will post the updated version on this page with a revised "Last updated" date. Where changes are material, we will endeavour to draw them to your attention. Continued use after changes are posted constitutes your acceptance of the revised terms.',
        ],
        'law' => [
            'title'         => 'Governing Law and Jurisdiction',
            'body'          => 'These Terms and Conditions are governed by Italian law. Any disputes arising out of or in connection with these terms shall be subject to the non-exclusive jurisdiction of the courts of Italy, specifically the court competent for the jurisdiction of :city.',
            'consumer_note' => 'If you are a consumer resident in another EU member state, you may also have the right to bring proceedings in the courts of your country of residence, and mandatory consumer protection rules of your country of residence may apply.',
            'language_note' => 'The binding language of these Terms and Conditions is Italian. Translations into other languages are provided for convenience only.',
        ],
        'contact' => [
            'title' => 'Contact',
        ],
    ],

    // ─── Impressum ───────────────────────────────────────────────────────────
    'impressum' => [
        'page_intro' => 'Company and contact information in accordance with legal disclosure requirements (Art. 2250 c.c. and D.Lgs. 70/2003).',
        'owner' => [
            'title' => 'Business Name and Address',
        ],
        'contact' => [
            'title' => 'Contact Information',
            'email' => 'Email',
            'pec'   => 'PEC (Certified Email)',
            'phone' => 'Phone',
        ],
        'company' => [
            'title'       => 'Company Registration Details',
            'vat'         => 'VAT Number (Partita IVA)',
            'vat_missing' => 'Available on request or displayed in the restaurant.',
            'tax'         => 'Tax Code / REA Number',
            'codice'      => 'Codice destinatario (e-invoice)',
        ],
        'representative' => [
            'title' => 'Legal Representative',
            'body'  => 'The business is represented by its legal representative(s) as registered with the competent Camera di Commercio. For formal legal communications, please use the contact details above or contact us in writing at the address listed.',
        ],
        'authority' => [
            'title' => 'Supervisory Authority',
            'body'  => 'Food service activities are subject to regulation by the competent local health authority (ASL/APSS) for the Province of :state, Autonomous Province of Bolzano/Bozen.',
        ],
        'legal_notice' => [
            'title'    => 'Legal Notice and Liability for Content',
            'accuracy' => 'The content of this website has been compiled with care and to the best of our knowledge. However, we cannot accept any liability for the completeness, accuracy or currency of information provided.',
            'links'    => 'We are not responsible for the content of external websites linked from this website. The operators of those websites are solely responsible for their content. At the time of linking, no legal violations were evident. If we become aware of any infringements, the links will be removed immediately.',
            'decree'   => 'In accordance with D.Lgs. 70/2003 (Electronic Commerce Decree), this website is operated as an information society service by :name.',
        ],
        'copyright' => [
            'title' => 'Copyright',
            'body'  => 'All content on this website — texts, photographs, graphics, logos and videos — is protected by Italian and EU copyright law. Reproduction or use, in whole or in part, requires prior written permission from :name.',
        ],
        'odr' => [
            'title'  => 'Dispute Resolution',
            'eu_odr' => 'The European Commission provides an Online Dispute Resolution (ODR) platform for consumers within the EU:',
            'note'   => 'We are not obliged to participate in alternative dispute resolution procedures before a consumer arbitration board, but we are willing to discuss resolutions directly. Please contact us at the address above.',
        ],
    ],

    // ─── Cookie Consent Banner ───────────────────────────────────────────────
    'consent' => [
        'text'       => 'We use cookies to ensure this website works correctly (strictly necessary) and, with your consent, to understand how visitors use our site (analytics). See our',
        'cookie_link'=> 'Cookie Policy',
        'and'        => 'and',
        'privacy_link'=> 'Privacy Policy',
        'accept_all' => 'Accept All',
        'necessary'  => 'Accept Necessary Only',
        'manage'     => 'Manage Cookie Preferences',
        'aria_label' => 'Cookie consent',
    ],
];
