<?php

namespace App\Http\Controllers\Api;

use App\Events as Events;
use App\Models\Attribute;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\PositionChangeable;
use App\Http\Resources as Resources;
use App\Http\Requests\AttributeSaveRequest;

class AttributeController extends ApiController
{
    use StatusChangeable, Deleteable, PositionChangeable;

    protected static $modelClass = Product::class;

    public function show(Product $product)
    {
        return [
            'product' => new Resources\AttributeEditResource($product),
        ];
    }

    public function store(AttributeSaveRequest $request)
    {
        try {
            $attribute = (new Attribute())->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (2000). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\EntityCreated($attribute));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('created', ['id' => $attribute->id]),
            'redirect' => "/shop/attributes/{$attribute->id}",
            'attribute' => new Resources\ProductEditResource($attribute)
        ], 200);
    }
}
