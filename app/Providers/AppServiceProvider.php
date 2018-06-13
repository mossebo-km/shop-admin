<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use \App\Http\Requests\ApiRequest;
use \App\Http\Controllers\Api as ApiControllers;
use \App\Http\Requests;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \Validator::extend('trim', function($attribute, $value) {
            return empty($value) ? true : trim($value);
        });
    }

    public function register()
    {
        // Нужно, чтобы убрать base64svg placeholder из базы
        $this->app->bind('Spatie\MediaLibrary\ResponsiveImages\ResponsiveImageGenerator', 'App\MediaLibrary\ResponsiveImages\ResponsiveImageGenerator');

        $this->app
            ->when(ApiControllers\AdminController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\AdminRequest::class);

        $this->app
            ->when(ApiControllers\PermissionGroupController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\PermissionGroupRequest::class);

        $this->app
            ->when(ApiControllers\RoleController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\RoleRequest::class);

        $this->app
            ->when(ApiControllers\Shop\AttributeController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\Shop\AttributeRequest::class);

        $this->app
            ->when(ApiControllers\Shop\CategoryController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\Shop\CategoryRequest::class);

        $this->app
            ->when(ApiControllers\Shop\RoomController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\Shop\RoomRequest::class);

        $this->app
            ->when(ApiControllers\Shop\StyleController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\Shop\StyleRequest::class);

        $this->app
            ->when(ApiControllers\Shop\PriceTypeController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\Shop\PriceTypeRequest::class);

        $this->app
            ->when(ApiControllers\Shop\ProductController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\Shop\ProductRequest::class);

        $this->app
            ->when(ApiControllers\Shop\SupplierController::class)
            ->needs(ApiRequest::class)
            ->give(Requests\Shop\SupplierRequest::class);
    }
}
