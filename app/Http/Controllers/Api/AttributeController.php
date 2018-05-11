<?php

namespace App\Http\Controllers\Api;

use App\Models\Attribute;

use App\Http\Resources\AttributeEditResource;
use App\Http\Resources\AttributesTableResource;
use App\Http\Resources\AttributeOptionResource;

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

    /**
     * Отображение списка аттрибутов.
     *
     * @param  Attribute
     * @return array
     */
    public function index()
    {
        return [
            'attributes' => static::toResource(self::$modelClass::get()),
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
