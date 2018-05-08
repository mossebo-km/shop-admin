<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use \App\Http\Requests\ApiRequest;
use \App\Http\Controllers\Api as ApiControllers;
use \App\Http\Requests;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
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

        $this->app
            ->when(ApiControllers\AdminController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\AdminRequest::class);

        $this->app
            ->when(ApiControllers\AttributeController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\AttributeRequest::class);

        $this->app
            ->when(ApiControllers\CategoryController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\CategoryRequest::class);

        $this->app
            ->when(ApiControllers\PermissionGroupController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\PermissionGroupRequest::class);

        $this->app
            ->when(ApiControllers\PriceTypeController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\PriceTypeRequest::class);

        $this->app
            ->when(ApiControllers\ProductController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\ProductRequest::class);

        $this->app
            ->when(ApiControllers\RoleController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\RoleRequest::class);

        $this->app
            ->when(ApiControllers\SupplierController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\SupplierRequest::class);
    }
}
