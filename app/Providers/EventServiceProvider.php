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
        'App\Events\EntityStatusChanged' => [
            'App\Listeners\EntityStatusChangedListener',
        ],

        'App\Events\EntityCreated' => [
            'App\Listeners\EntityCreatedListener',
        ],

        'App\Events\EntityUpdated' => [
            'App\Listeners\EntityUpdatedListener',
        ],

        'App\Events\EntityDeleted' => [
            'App\Listeners\EntityDeletedListener',
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
