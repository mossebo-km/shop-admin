<?php

namespace App\Listeners;

use App\Events\EntityUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EntityUpdatedListener
{
    /**
     * Handle the event.
     *
     * @param  EntityUpdated  $event
     * @return void
     */
    public function handle(EntityUpdated $event)
    {
        \App\Http\Controllers\DataHandler::clearCache();
    }
}
