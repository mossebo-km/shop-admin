<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \Validator::extend('trim', function($attribute, $value) {
            return empty($value) ? true : trim($value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Нужно, чтобы убрать base64svg placeholder из базы
        $this->app->bind('Spatie\MediaLibrary\ResponsiveImages\ResponsiveImageGenerator', 'App\MediaLibrary\ResponsiveImages\ResponsiveImageGenerator');
    }
}
