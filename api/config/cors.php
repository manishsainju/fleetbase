<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'http://localhost:4200',
        env(
            'CONSOLE_HOST'
        ),
        'https://fleetbase.katchkw.com',
        'https://fleetbase-uat.katchkw.com',
        'https://fleet.katchkw.com',
        'https://admin.katchkw.com',
        'https://beta.katchkw.com',
        'https://adminuat.katchkw.com',
        'https://graphql.katchkw.com'
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 8640000,

    'supports_credentials' => true,

];
