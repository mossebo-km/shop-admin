<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Api\ApiController;

use App\Models\Shop\Attribute\Attribute;

use Attributes;

use App\Http\Resources\Shop\Attribute\AttributeEditResource;
use App\Http\Resources\Shop\Attribute\AttributesTableResource;
use App\Http\Resources\Shop\Attribute\AttributeOptionResource;

use App\Support\Traits\Controllers\Creatable;
use App\Support\Traits\Controllers\Updatable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\PositionChangeable;

class AttributeController extends ApiController
{
    use Creatable, Updatable, Deleteable, StatusChangeable, PositionChangeable;

    protected static $modelClass = Attribute::class;
    protected static $entityName = 'attribute';
    protected static $editResource = AttributeEditResource::class;
    protected static $tableResource = AttributesTableResource::class;

    public function index()
    {
        return [
            'attributes' => static::toResource(Attributes::getCollection('i18n')),
        ];
    }

    public function options(Attribute $attribute)
    {
        return response()->json([
            'status' => 'success',
            'options' => AttributeOptionResource::collection($attribute->options()->with('i18n')->get()),
        ], 200);
    }
}
