<?php

namespace App\Models\Shop\Supplier;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\Positionable;
use App\Support\Traits\Models\RequestSaver;
use App\Models\Shop\Product\Product;
use MosseboShopCore\Models\Shop\Supplier\Supplier as BaseSupplier;

class Supplier extends BaseSupplier
{
    use StatusChangeable, Positionable, RequestSaver;

    public function products()
    {
        return $this->hasMany(Product::class, $this->relationFieldName);
    }
}
