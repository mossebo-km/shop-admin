<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
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
        $this->app->singleton('App\Contracts\Repositories\CategoryRepository', 'App\Repositories\CategoryRepository');
        $this->app->singleton('App\Contracts\Repositories\CurrencyRepository', 'App\Repositories\CurrencyRepository');
        $this->app->singleton('App\Contracts\Repositories\LanguageRepository', 'App\Repositories\LanguageRepository');
        $this->app->singleton('App\Contracts\Repositories\PriceTypeRepository', 'App\Repositories\PriceTypeRepository');
    }
}
