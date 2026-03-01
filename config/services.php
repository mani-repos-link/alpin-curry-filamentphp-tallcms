<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'key' => env('POSTMARK_API_KEY'),
    ],

    'resend' => [
        'key' => env('RESEND_API_KEY'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'reservations' => [
        'notify_email' => env('RESERVATION_NOTIFY_EMAIL', env('MAIL_FROM_ADDRESS')),
        'whatsapp_number' => env('RESERVATION_WHATSAPP_NUMBER', env('RESTAURANT_CONTACT_WHATSAPP_RAW', '393270077595')),
    ],

    'menu' => [
        'endpoint' => env('MENU_API_GRAPHQL_ENDPOINT', ''),
        'timeout' => (int) env('MENU_API_TIMEOUT', 8),
    ],

];
