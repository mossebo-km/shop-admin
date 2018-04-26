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
        'App\Events\Entity\EntityStatusChanged' => [
            'App\Listeners\Entity\EntityStatusChangedListener',
            'App\Listeners\Entity\EntityChangeNeedsLogListener',
        ],

        'App\Events\Entity\EntityCreated' => [
            'App\Listeners\Entity\EntityCreatedListener',
            'App\Listeners\Entity\EntityChangeNeedsLogListener',
        ],

        'App\Events\Entity\EntityUpdated' => [
            'App\Listeners\Entity\EntityUpdatedListener',
            'App\Listeners\Entity\EntityChangeNeedsLogListener',
        ],

        'App\Events\Entity\EntityDeleted' => [
            'App\Listeners\Entity\EntityDeletedListener',
            'App\Listeners\Entity\EntityChangeNeedsLogListener',
        ],

        'App\Events\Entity\EntitiesPositionChanged' => [
            'App\Listeners\Entity\EntitiesPositionChangedListener',
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
