<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Verification Authentication Enabled
    |--------------------------------------------------------------------------
    */

    'laravelphp2stepEnabled' => env('LARAVELPHP_2STEP_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Verification Database Settings
    |--------------------------------------------------------------------------
    */

    'laravelphp2stepDatabaseConnection'  => env('LARAVELPHP_2STEP_DATABASE_CONNECTION', 'mysql'),
    'laravelphp2stepDatabaseTable'       => env('LARAVELPHP_2STEP_DATABASE_TABLE', 'twoStepAuth'),

    /*
    |--------------------------------------------------------------------------
    | Laravel Default User Model
    |--------------------------------------------------------------------------
    */

    'defaultUserModel' => env('LARAVELPHP_2STEP_USER_MODEL', 'App\User'),

    /*
    |--------------------------------------------------------------------------
    | Verification Email Settings
    |--------------------------------------------------------------------------
    */

    'verificationEmailFrom'     => env('LARAVELPHP_2STEP_EMAIL_FROM', env('MAIL_USERNAME')),
    'verificationEmailFromName' => env('LARAVELPHP_2STEP_EMAIL_FROM_NAME', config('app.name').' 2-Step Verification'),

    /*
    |--------------------------------------------------------------------------
    | Verification Timings Settings
    |--------------------------------------------------------------------------
    */

    'laravelphp2stepExceededCount'             => env('LARAVELPHP_2STEP_EXCEEDED_COUNT', 3),
    'laravelphp2stepExceededCountdownMinutes'  => env('LARAVELPHP_2STEP_EXCEEDED_COUNTDOWN_MINUTES', 1440),
    'laravelphp2stepVerifiedLifetimeMinutes'   => env('LARAVELPHP_2STEP_VERIFIED_LIFETIME_MINUTES', 360),
    'laravelphp2stepTimeResetBufferSeconds'    => env('LARAVELPHP_2STEP_RESET_BUFFER_IN_SECONDS', 360),

    /*
    |--------------------------------------------------------------------------
    | Verification blade view style settings
    |--------------------------------------------------------------------------
    */

    'laravelphp2stepAppCssEnabled'         => env('LARAVELPHP_2STEP_APP_CSS_ENABLED', false),
    'laravelphp2stepAppCss'                => env('LARAVELPHP_2STEP_APP_CSS', 'css/app.css'),
    'laravelphp2stepBootstrapCssCdnEnbled' => env('LARAVELPHP_2STEP_BOOTSTRAP_CSS_CDN_ENABLED', true),
    'laravelphp2stepBootstrapCssCdn'       => env('LARAVELPHP_2STEP_BOOTSTRAP_CSS_CDN', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'),
    'laravelphp2stepCssFile'               => env('LARAVELPHP_2STEP_CSS_FILE', 'css/laravelphp2step/app.css'),

];
