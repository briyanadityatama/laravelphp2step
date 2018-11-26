<?php

namespace briyanadityatama\laravelphp2step;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use briyanadityatama\laravelphp2step\App\Http\Middleware\LaravelPHP2step;

class LaravelPHP2stepServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        $router->middlewareGroup('twostep', [LaravelPHP2step::class]);
        $this->loadTranslationsFrom(__DIR__.'/resources/lang/', 'laravelphp2step');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views/', 'laravelphp2step');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/laravelphp2step.php', 'laravelphp2step');
        $this->publishFiles();
    }

    /**
     * Publish files for Laravel 2-Step Verification.
     *
     * @return void
     */
    private function publishFiles()
    {
        $publishTag = 'laravelphp2step';

        $this->publishes([
            __DIR__.'/config/laravelphp2step.php' => base_path('config/laravelphp2step.php'),
        ], $publishTag);

        $this->publishes([
            __DIR__.'/database/migrations/' => base_path('/database/migrations'),
        ], $publishTag);

        $this->publishes([
            __DIR__.'/public/css' => public_path('css/laravelphp2step'),
        ], $publishTag);

        $this->publishes([
            __DIR__.'/resources/assets/scss' => resource_path('assets/scss/laravelphp2step'),
        ], $publishTag);

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/laravelphp2step'),
        ], $publishTag);

        $this->publishes([
            __DIR__.'/resources/lang' => base_path('resources/lang/vendor/laravelphp2step'),
        ], $publishTag);
    }
}
