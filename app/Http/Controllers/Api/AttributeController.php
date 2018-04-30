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

    protected static $modelClass = Attribute::class;

    /**
     * Отображение списка аттрибутов.
     *
     * @param  Attribute
     * @return array
     */
    public function index()
    {
        return [
            'attributes' => Resources\AttributesTableResource::collection(self::$modelClass::orderBy('position', 'asc')->get()),
        ];
    }

    /**
     * Отображение аттрибута.
     *
     * @param  Attribute
     * @return array
     */
    public function show(Attribute $attribute)
    {
        return [
            'attribute' => new Resources\AttributeEditResource($attribute),
        ];
    }

    /**
     * Создание аттрибута.
     *
     * @param AttributeSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
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
            'attribute' => new Resources\AttributeEditResource($attribute)
        ], 200);
    }

    /**
     * Изменение аттрибута.
     *
     * @param AttributeSaveRequest $request
     * @param Attribute $category
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(AttributeSaveRequest $request, Attribute $attribute)
    {
        try {
            $attribute->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1001). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\EntityUpdated($attribute));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('updated', ['id' => $attribute->id]),
            'attribute' => new Resources\AttributeEditResource($attribute)
        ], 200);
    }


    /**
     * Значения аттрибута.
     *
     * @param Attribute $attribute
     * @return \Illuminate\Http\JsonResponse
     */
    public function options(Attribute $attribute)
    {
        return response()->json([
            'status' => 'success',
            'options' => Resources\AttributeOptionResource::collection($attribute->options()->with('i18n')->get()),
        ], 200);
    }
}
