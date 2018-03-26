<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepoProvider extends ServiceProvider
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
        $this->app->singleton('App\Interfaces\Repositories\CategoryRepositoryInterface', 'App\Repositories\CategoryRepository');
        $this->app->singleton('App\Interfaces\Repositories\CurrencyRepositoryInterface', 'App\Repositories\CurrencyRepository');
        $this->app->singleton('App\Interfaces\Repositories\LanguageRepositoryInterface', 'App\Repositories\LanguageRepository');
        $this->app->singleton('App\Interfaces\Repositories\PriceTypeRepositoryInterface', 'App\Repositories\PriceTypeRepository');
    }
}
