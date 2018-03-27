<?php

namespace App\Listeners;

use App\Events\EntityDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EntityDeletedListener
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
     * @param  EntityDeleted  $event
     * @return void
     */
    public function handle(EntityDeleted $event)
    {
        //
    }
}
