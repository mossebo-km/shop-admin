<?php

namespace App\Listeners;

use App\Events\EntityUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EntityUpdatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EntityUpdated  $event
     * @return void
     */
    public function handle(EntityUpdated $event)
    {
        //
    }
}
