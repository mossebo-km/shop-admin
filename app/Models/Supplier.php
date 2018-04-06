<?php

namespace App\Models;

use App\Support\Traits\Models\StatusChangeable;
use App\Support\Traits\Models\PositionChangeable;
use App\Support\Traits\Models\RequestSaver;

class Supplier extends Base\BaseModel
{
    use StatusChangeable, PositionChangeable, RequestSaver;

    protected $tableIdentif = 'Suppliers';

    protected $fillable = [
        'name', 'description', 'enabled', 'position'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function products()
    {
        return $this->hasMany(Products::class, 'supplier_id');
    }
}
