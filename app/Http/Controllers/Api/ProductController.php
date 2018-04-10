<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Events as Events;
use App\Http\Resources as Resources;
use App\Models\Product;
use App\Http\Requests\ProductSaveRequest;
use App\Http\Requests\ImageUploadRequest;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\Sluggable;


// todo: создать очередь отчистки изображений из коллекции temp

class ProductController extends ApiController
{
    use StatusChangeable, Deleteable, Sluggable;

    protected static $modelClass = Product::class;

    /**
     * Список товаров с пагинацией.
     *
     * @param  Request
     * @return array
     */
    public function index(Request $request)
    {
        $pagination = $this->_paginate($request->all());

        return [
            'items' => Resources\ProductsTableResource::collection($pagination->getCollection()),
            'perPage' => $pagination->perPage(),
            'currentPage' => $pagination->currentPage(),
            'totalRows' => $pagination->total(),
        ];
    }

        // Убрать две функции ниже хз куда.
        public function _paginate(Array $params = []): LengthAwarePaginator
        {
            $pagination = $this->_makePagination($params);

            if ($pagination->isEmpty() && $params['currentPage'] > 1) {
                $currentPage = round($pagination->total() / $params['perPage']);
                $params['currentPage'] = $currentPage <= 0 ? 1 : $currentPage;

                $pagination = $this->_makePagination($params);
            }

            return $pagination;
        }

        public function _makePagination(Array $params): LengthAwarePaginator
        {
            extract($params, EXTR_OVERWRITE);

            if ($sortBy === 'price') {
                $pricesTableName = \Config::get('migrations.Prices');
                $productsI18TableName = \Config::get('migrations.ProductsI18');
                $productsTableName = \Config::get('migrations.Products');

                $query = Product::withTranslate()
                    ->select("{$productsTableName}.*", "{$productsI18TableName}.*")
                    ->leftJoin("{$pricesTableName} as p", function ($join) use($productsTableName, $priceType) {
                      $join->on('p.item_id', '=', "{$productsTableName}.id")
                        ->where('p.item_type', 'product')
                        ->where('p.price_type_id', $priceType)
                        ->where('p.currency_code', 'RUB');
                    })
                    ->orderBy('p.value', $sortType);
            }
            else {
                $query = Product::withTranslate()->orderBy($sortBy, $sortType);
            }

            if ($search) {
                $query = $query->where(\DB::raw('lower(title)'), 'like', "%" . mb_strtolower($search) . "%");
            }

            return $query->orderBy('id', $sortType)->with('prices')->paginate($perPage, null, null, $currentPage);
        }


    /**
     * Данные товара.
     * @param Product $product
     * @return array
     */
    public function show(Product $product)
    {
        return [
            'product' => new Resources\ProductEditResource($product),
        ];
    }

    /**
     * Сохранение товара.
     *
     * @param ProductSaveRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ProductSaveRequest $request)
    {
        try {
            $product = (new Product())->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (2000). Обратитесь к разработчикам.'
            ], 500);
        }

        \Event::fire(new Events\EntityCreated($product));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('created', ['id' => $product->id]),
            'redirect' => "/shop/products/{$product->id}",
//            'product' => new Resources\ProductEditResource($product)
        ], 200);
    }


    /**
     * Изменение товара.
     *
     * @param ProductSaveRequest $request
     * @param Product $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ProductSaveRequest $request, Product $product)
    {
        try {
            $product = $product->saveFromRequestData($request->all());
        }
        catch (\App\Exceptions\AdminException $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
                'errors' => $e->getParams(),
            ], 422);
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (2001). Обратитесь к разработчикам.'
            ], 500);
        }

        $product = $product->fresh();

        \Event::fire(new Events\EntityUpdated($product));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('updated', ['id' => $product->id]),
            'product' => new Resources\ProductEditResource($product)
        ], 200);
    }

    /**
     * Загрузка изображений для конкретного товара.
     *
     * @param ImageUploadRequest $request
     * @param Product $product
     * @return \Illuminate\Http\JsonResponse
     */
    public function imageUpload(ImageUploadRequest $request, Product $product)
    {
        $image = $product->addImageFromFile($request->file('file'));

        return response()->json([
            'status' => 'success',
            'image' => new Resources\MediaResource($image),
        ]);
    }
}
