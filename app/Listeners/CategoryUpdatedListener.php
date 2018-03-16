<?php

namespace App\Listeners;

use App\Events\CategoryUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CategoryUpdatedListener
{
    /**
     * Handle the event.
     *
     * @param  CategoryUpdated  $event
     * @return void
     */
    public function handle(CategoryUpdated $event)
    {
        \App\Http\Controllers\DataController::clearCache('category');
    }
}
