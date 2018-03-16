<?php

namespace App\Listeners;

use App\Events\CategoryCreate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CategoryCreatedListener
{
    /**
     * Handle the event.
     *
     * @param  CategoryCreated  $event
     * @return void
     */
    public function handle(CategoryCreated $event)
    {
        \App\Http\Controllers\DataController::clearCache('category');
    }
}
