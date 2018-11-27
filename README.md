# laravelphp2step# Laravel 2 Step Verification

Table of contents:

- [About](#about)
- [Features](#features)
- [Requirements](#requirements)
- [Installation Instructions](#installation-instructions)
- [Configuration](#configuration)
  - [Environment File](#environment-file)
- [Usage](#usage)
- [Routes](#routes)

### About

Laravel 2-Step verification is a package to add 2-Step user authentication to any Laravel project easily. It is configurable and customizable. It uses notifications to send the user an email with a 4-digit verification code.

Laravel 2-Step Authentication Verification for Laravel. Can be used in out the box with Laravel's authentication scaffolding or integrated into other projects.

### Features

| Laravel 2 Step Verification Features                                                                   |
| :----------------------------------------------------------------------------------------------------- |
| Uses [Notification](https://laravel.com/docs/5.5/notifications) Class to send user code to users email |
| Can publish customizable views and assets                                                              |
| Lots of [configuration](#configuration) options                                                        |
| Uses Language [localization](https://laravel.com/docs/5.5/localization) files                          |
| Verificaton Page                                                                                       |
| Locked Page                                                                                            |

### Requirements

- [Laravel 5.3, 5.4, or 5.5+](https://laravel.com/docs/installation)

### Installation Instructions

1. From your projects root folder in terminal run:

```bash
    composer require briyanadityatama/laravelphp2step
```

2. Register the package

- Laravel 5.5 and up
  Uses package auto discovery feature, no need to edit the `config/app.php` file.

- Laravel 5.4 and below
  Register the package with laravel in `config/app.php` under `providers` with the following:

```php
    'providers' => [
        briyanadityatama\laravelphp2step\LaravelPHP2stepServiceProvider::class,
    ];
```

3. Publish the packages views, config file, assets, and language files by running the following from your projects root folder:

```bash
    php artisan vendor:publish --tag=laravelphp2step
```

4. Optionally Update your `.env` file and associated settings (see [Environment File](#environment-file) section)

5. Run the migration to add the verifications codes table:

```php
    php artisan migrate
```

- Note: If you want to specify a different table or connection make sure you update your `.env` file with the needed configuration variables.

6. Make sure your apps email is configured - this is usually done by configuring the Laravel out the box settings in the `.env` file.

### Configuration

Laravel 2-Step Verification can be configured in directly in `/config/laravelphp2step.php` or in the variables in your `.env` file.

##### Environment File

Here are the `.env` file variables available:

```bash
LARAVEL_2STEP_ENABLED=true
LARAVEL_2STEP_DATABASE_CONNECTION=mysql
LARAVEL_2STEP_DATABASE_TABLE=laravelphp2step
LARAVEL_2STEP_USER_MODEL=App\User
LARAVEL_2STEP_EMAIL_FROM="anEmailIsrequired@email.com"
LARAVEL_2STEP_EMAIL_FROM_NAME="Laravel 2 Step Verification"
LARAVEL_2STEP_EMAIL_SUBJECT='Laravel 2 Step Verification'
LARAVEL_2STEP_EXCEEDED_COUNT=3
LARAVEL_2STEP_EXCEEDED_COUNTDOWN_MINUTES=1440
LARAVEL_2STEP_VERIFIED_LIFETIME_MINUTES=360
LARAVEL_2STEP_RESET_BUFFER_IN_SECONDS=300
LARAVEL_2STEP_CSS_FILE="css/laravelphp2step/app.css"
LARAVEL_2STEP_APP_CSS_ENABLED=false
LARAVEL_2STEP_APP_CSS="css/app.css"
LARAVEL_2STEP_BOOTSTRAP_CSS_CDN_ENABLED=true
LARAVEL_2STEP_BOOTSTRAP_CSS_CDN="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
```

### Usage

Laravel 2-Step Verification is enabled via middleware.
You can enable 2-Step Verification in your routes and controllers via the following middleware:

```php
twostep
```

Example to start recording page views using middlware in `web.php`:

```php
Route::group(['middleware' => ['twostep']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
```

### Routes

- `/verification/needed`
- `/verification/verify`
- `/verification/resend`

- Tree command can be installed using brew: `brew install tree`
- File tree generated using command `tree -a -I '.git|node_modules|vendor|storage|tests`

### License

Laravel PHP 2-Step Verification is licensed under the MIT license. Enjoy!
