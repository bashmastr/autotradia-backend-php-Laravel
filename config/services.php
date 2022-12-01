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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],


    'facebook' => [
        'client_id'     => "255155249456665",
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect'      => "http://127.0.0.1:8001/api/auth/login/facebook/callback",
    ],

   'google' => [
        'client_id'     => "1044447897779-g9oo287boa78r16knri6iq41kc0ig218.apps.googleusercontent.com",
        'client_secret' => "2Dl2r9opR_OPcbS87fQKPf9q",
        'redirect'      => "http://127.0.0.1:8001/api/auth/login/google/callback"
    ],

];
