<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Events as Events;
use App\Http\Resources as Resources;
use App\Models\Product;
use App\Http\Requests\ProductSaveRequest;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\Sluggable;
use App\Support\Traits\Controllers\ImageUploadable;


// todo: создать очередь отчистки изображений из коллекции temp

class ProductController extends ApiController
{
    use StatusChangeable, Deleteable, Sluggable, ImageUploadable;

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
            'products' => Resources\ProductsTableResource::collection($pagination->getCollection()),
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

            $productsTableName = \Config::get('migrations.Products');

            $sortBy = isset($sortBy) ? $sortBy : 'id';

            if ($sortBy === 'price') {
                $pricesTableName = \Config::get('migrations.Prices');

                $query = Product::leftJoin("{$pricesTableName} as prices", function ($join) use($productsTableName, $priceType) {
                      $join->on('prices.item_id', '=', "{$productsTableName}.id")
                        ->where('prices.item_type', 'product')
                        ->where('prices.price_type_id', $priceType)
                        ->where('prices.currency_code', 'RUB');
                    })
                    ->orderBy('prices.value', $sortType);
            }
            elseif ($sortBy === 'title') {
                $query = Product::withTranslate()
                    ->orderBy($sortBy, $sortType);
            }
            else {
                $query = Product::orderBy($sortBy, $sortType);
            }

            if (!empty($search)) {
                $i18nTableName = \Config::get('migrations.ProductsI18n');
                $query = $query->join("{$i18nTableName} as i18n", function ($join) use($productsTableName, $search) {
                    $join->on('i18n.product_id', '=', "{$productsTableName}.id")
                        ->where(\DB::raw('lower(title)'), 'like', "%" . mb_strtolower($search) . "%");
                });
            }

            return $query->select("{$productsTableName}.*")
                ->orderBy('id', $sortType)
                ->with(['i18n', 'prices'])
                ->paginate($perPage, null, null, $currentPage);
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

        \Event::fire(new Events\Entity\EntityCreated($product));

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

        \Event::fire(new Events\Entity\EntityUpdated($product));

        return response()->json([
            'status' => 'success',
            'message' => $this->lang('updated', ['id' => $product->id]),
            'product' => new Resources\ProductEditResource($product)
        ], 200);
    }
}
