<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Api\ApiController;

use App\Models\Shop\Supplier;

use App\Http\Resources\Shop\SupplierEditResource;

use App\Support\Traits\Controllers\Creatable;
use App\Support\Traits\Controllers\Updatable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\PositionChangeable;


class SupplierController extends ApiController
{
    use Creatable, Updatable, Deleteable, StatusChangeable, PositionChangeable;

    protected static $modelClass = Supplier::class;
    protected static $entityName = 'supplier';
    protected static $editResource = SupplierEditResource::class;
    protected static $tableResource = SupplierEditResource::class;

    public function index()
    {
        return [
            'suppliers' => static::toResource(static::$modelClass::get()),
        ];
    }
}
