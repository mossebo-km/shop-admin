<?php

namespace App\Http\Controllers\Api;

use App\Models\Supplier;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\PositionChangeable;
use App\Http\Requests\SupplierSaveRequest;
use App\Http\Resources\SupplierEditResource;
use App\Events as Events;

class SupplierController extends ApiController
{
    use Deleteable, StatusChangeable, PositionChangeable;

    protected static $modelClass = Supplier::class;

    /**
     * @return array
     */
    public function index()
    {
        return [
            'list' => SupplierEditResource::collection(self::$modelClass::all()),
        ];
    }

    /**
     * Отображение поставщика.
     *
     * @param  Supplier
     * @return array
     */
    public function show(Supplier $supplier)
    {
        return [
            'supplier' => new SupplierEditResource($supplier)
        ];
    }

    /**
     * Создание категории.
     *
     * @param SupplierSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(SupplierSaveRequest $request)
    {
        try {
            $supplier = (new self::$modelClass())->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1000). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\EntityCreated($supplier));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('created', ['id' => $supplier->id]),
            'redirect' => "/shop/suppliers/{$supplier->id}",
            'supplier' => new SupplierEditResource($supplier)
        ], 200);
    }

    /**
     * Изменение категории.
     *
     * @param SupplierSaveRequest $request
     * @param Supplier $supplier
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(SupplierSaveRequest $request, Supplier $supplier)
    {
        try {
            $supplier->saveFromRequestData($request->all());
        } catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (1001). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\EntityUpdated($supplier));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('updated', ['id' => $supplier->id]),
            'supplier' => new SupplierEditResource($supplier)
        ], 200);
    }
}
