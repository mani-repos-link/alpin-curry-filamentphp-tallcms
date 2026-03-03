<?php

return [
    'name' => env('RESTAURANT_NAME', env('APP_NAME', 'Alpin Curry')),
    'legal_name' => env('RESTAURANT_LEGAL_NAME', 'Alpin Curry SAS'),

    'brand' => [
        'logo_primary_path' => env('RESTAURANT_LOGO_PRIMARY_PATH', 'assets/images/logos/logo_ori.png'),
        'logo_mark_path' => env('RESTAURANT_LOGO_MARK_PATH', 'assets/images/logos/logo.png'),
        'logo_negative_path' => env('RESTAURANT_LOGO_NEGATIVE_PATH', 'assets/images/logos/Logo_neg.png'),
        'favicon_path' => env('RESTAURANT_FAVICON_PATH', 'favicon.ico'),
        'favicon_32_path' => env('RESTAURANT_FAVICON_32_PATH', 'favicon-32x32.png'),
        'favicon_16_path' => env('RESTAURANT_FAVICON_16_PATH', 'favicon-16x16.png'),
        'apple_touch_icon_path' => env('RESTAURANT_APPLE_TOUCH_ICON_PATH', 'apple-touch-icon.png'),
    ],

    'contact' => [
        'email' => env('RESTAURANT_CONTACT_EMAIL', env('MAIL_FROM_ADDRESS', 'info@alpincurry.it')),
        'pec_email' => env('RESTAURANT_CONTACT_PEC_EMAIL', ''),
        'phone_display' => env('RESTAURANT_CONTACT_PHONE_DISPLAY', '+39 327 007 7595'),
        'phone_raw' => env('RESTAURANT_CONTACT_PHONE_RAW', '393270077595'),
        'whatsapp_raw' => env('RESTAURANT_CONTACT_WHATSAPP_RAW', env('RESERVATION_WHATSAPP_NUMBER', '393270077595')),
    ],

    'address' => [
        'street' => env('RESTAURANT_ADDRESS_STREET', 'Corso della Liberta'),
        'street_number' => env('RESTAURANT_ADDRESS_STREET_NUMBER', '103'),
        'postal_code' => env('RESTAURANT_ADDRESS_POSTAL_CODE', '39012'),
        'city' => env('RESTAURANT_ADDRESS_CITY', 'Merano'),
        'state' => env('RESTAURANT_ADDRESS_STATE', 'BZ'),
        'region' => env('RESTAURANT_ADDRESS_REGION', 'Trentino-Alto Adige'),
        'country' => env('RESTAURANT_ADDRESS_COUNTRY', 'Italy'),
        'country_code' => env('RESTAURANT_ADDRESS_COUNTRY_CODE', 'IT'),
    ],

    'legal' => [
        'vat_id' => env('RESTAURANT_VAT_ID', ''),
        'identity_id' => env('RESTAURANT_IDENTITY_ID', ''),
        'codice_destinatario' => env('RESTAURANT_CODICE_DESTINATARIO', ''),
    ],

    'map_query' => env('RESTAURANT_MAP_QUERY', 'Corso della Liberta 103, 39012 Merano, Italy'),
];
