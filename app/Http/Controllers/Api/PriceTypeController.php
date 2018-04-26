<?php

namespace App\Http\Controllers\Api;

use App\Events as Events;
use App\Models\PriceType;
use App\Http\Requests\PriceTypeSaveRequest;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\PositionChangeable;
use App\Http\Resources as Resources;

class PriceTypeController extends ApiController
{
    use Deleteable, StatusChangeable, PositionChangeable;

    protected static $modelClass = PriceType::class;

    /**
     * Список категорий.
     *
     * @return array
     */
    public function index()
    {
        return [
            'price-types' => Resources\PriceTypesTableResource::collection(\PriceTypes::getCollection()),
        ];
    }

    /**
     * Отображение категории.
     *
     * @param PriceType
     * @return array
     */
    public function show(PriceType $priceType)
    {
        return [
            'price-type' => new Resources\PriceTypeEditResource($priceType)
        ];
    }

    /**
     * Создание категории.
     *
     * @param PriceTypeSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(PriceTypeSaveRequest $request)
    {
        try {
            $priceType = (new PriceType())->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1000). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\Entity\EntityCreated($priceType));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('created', ['id' => $priceType->id]),
            'redirect' => "/shop/price-types/{$priceType->id}",
//            'price-type' => new Resources\PriceTypeEditResource($priceType)
        ], 200);
    }

    /**
     * Изменение категории.
     *
     * @param PriceTypeSaveRequest $request
     * @param PriceType $priceType
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(PriceTypeSaveRequest $request, PriceType $priceType)
    {
        try {
            $priceType->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1001). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\Entity\EntityUpdated($priceType));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('updated', ['id' => $priceType->id]),
            'price-type' => new Resources\PriceTypeEditResource($priceType)
        ], 200);
    }
}