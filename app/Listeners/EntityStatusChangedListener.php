<?php

namespace App\Listeners;

use App\Events\EntityStatusChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EntityStatusChangedListener
{
    /**
     * Handle the event.
     *
     * @param  CategoryUpdated  $event
     * @return void
     */
    public function handle(EntityStatusChanged $event)
    {
        \App\Http\Controllers\DataHandler::clearCache();
    }
}
