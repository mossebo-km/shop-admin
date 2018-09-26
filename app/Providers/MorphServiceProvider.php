<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class MorphServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Relation::morphMap([
            'admin'    => \App\Models\Admin::class,
            'product'  => \App\Models\Shop\Product\Product::class,
            'category' => \App\Models\Shop\Category\Category::class,
            'room'     => \App\Models\Shop\Room\Room::class,
            'style'    => \App\Models\Shop\Style\Style::class,
            'review'   => \App\Models\Review::class,
        ]);
    }

    public function register()
    {
        //
    }
}
