<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MediaLibraryProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Нужно, чтобы убрать base64svg placeholder из базы
        $this->app->bind('Spatie\MediaLibrary\ResponsiveImages\ResponsiveImageGenerator', 'App\MediaLibrary\ResponsiveImages\ResponsiveImageGenerator');
    }
}
