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

    'twilio' => [
        'sid' => env('TWILIO_ACCOUNT_SID'),
        'token' => env('TWILIO_ACCOUNT_TOKEN'),
        'key' => env('TWILIO_API_KEY'),
        'secret' => env('TWILIO_API_SECRET')
    ],
    'google' => [
        'client_id' => '824624514069-s54ovaa699v7k0a457e8o094eg83sd7b.apps.googleusercontent.com',
        'client_secret' => 'jQaVmYkvF-naCpfauCOEAnlc',
        'redirect' => 'https://talkmaze.com/callback'
    ],
    'firebase' => [
        'api_key' => 'AIzaSyBtvNJtBNAAtUQNDHNvX9mMFl5N8rJA2N0',
        'auth_domain' => 'talkmaze-9a1c4.firebaseapp.com',
        'database_url' => 'https://talkmaze-9a1c4-default-rtdb.firebaseio.com/',
        'secret' => 'BdoQ5dGcEkYLY8tE5qquAFsJzN3SUzJnjmZx1MKV',
        'storage_bucket' => 'talkmaze-9a1c4.appspot.com',
        'project_id' => 'talkmaze-9a1c4',
        'messaging_sender_id' => '273477114495'
    ],
];
