<?php

namespace App\Listeners;

use App\Events\EntityDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EntityDeletedListener
{
    /**
     * Handle the event.
     *
     * @param  EntityDeleted  $event
     * @return void
     */
    public function handle(EntityDeleted $event)
    {
        \App\Http\Controllers\DataHandler::clearCache();
    }
}
