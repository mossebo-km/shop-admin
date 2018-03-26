<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\CategoryCreated' => [
            'App\Listeners\CategoryCreatedListener',
        ],

        'App\Events\CategoryUpdated' => [
            'App\Listeners\CategoryUpdatedListener',
        ],

        'App\Events\ProductCreated' => [
            'App\Listeners\ProductCreatedListener',
        ],

        'App\Events\ProductUpdated' => [
            'App\Listeners\ProductUpdatedListener',
        ],

        'App\Events\ProductDeleted' => [
            'App\Listeners\ProductDeletedListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
