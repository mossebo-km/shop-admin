<?php

namespace App\Models\Shop;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\Positionable;
use App\Support\Traits\Models\RequestSaver;
use MosseboShopCore\Models\Shop\Supplier as BaseSupplier;

class Supplier extends BaseSupplier
{
    use StatusChangeable, Positionable, RequestSaver;

    protected $fillable = [
        'name',
        'description',
        'enabled',
        'position'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function products()
    {
        return $this->hasMany(Products::class, $this->relationFieldName);
    }
}
