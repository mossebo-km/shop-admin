<?php

namespace App\Listeners;

use App\Events\EntityCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EntityCreatedListener
{
    /**
     * Handle the event.
     *
     * @param  EntityCreated  $event
     * @return void
     */
    public function handle(EntityCreated $event)
    {
        \App\Http\Controllers\DataHandler::clearCache();
    }
}
