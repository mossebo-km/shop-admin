<?php

namespace App\Listeners;

use App\Events\ProductDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProductDeletedListener
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
     * @param  ProductDeleted  $event
     * @return void
     */
    public function handle(ProductDeleted $event)
    {
        //
    }
}
