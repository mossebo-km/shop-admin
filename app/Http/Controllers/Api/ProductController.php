<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models as Models;
use App\Events as Events;
use App\Http\Resources as Resources;
use App\Models\Product;
use Validator;
use App\Validation\ValidatorExtend;
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
     * @return Array
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
                $params['currentPage'] = $this->_prepareParamCurrentPage($currentPage);

                $pagination = $this->_makePagination($params);
            }

            return $pagination;
        }

        public function _makePagination(Array $params): LengthAwarePaginator
        {
            extract($params, EXTR_OVERWRITE);

            $query = Product::withTranslate()->with('prices')->orderBy($sortBy, $sortType);

            if ($search) {
                $query = $query->where(\DB::raw('lower(title)'), 'like', "%" . mb_strtolower($search) . "%");
            }

            return $query->paginate($perPage, null, null, $currentPage);
        }

    /**
     * Данные товара.
     *
     * @param  Product
     * @return Array
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
     * @param  App\Http\Requests\ProductSaveRequest
     * @return Response
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
            'redirect' => "/products/{$product->id}",
            'product' => new Resources\ProductEditResource($product)
        ], 200);
    }

    /**
     * Изменение товара.
     *
     * @param  App\Http\Requests\ProductSaveRequest
     * @param  Product
     * @return Response
     */
    public function update(ProductSaveRequest $request, Product $product)
    {
        try {
            $product->saveFromRequestData($request->all());
        }
        catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => 'error',
                'message' => 'Техническая ошибка (2001). Обратитесь к разработчикам.'
            ], 500);
        }

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
     * @param  Request
     * @param  Product
     * @return Response
     */
    public function imageUpload(ImageUploadRequest $request, Product $product)
    {
        $file = $request->file('file');

        $image = $product->addImageToTemp($file->path(), $this->generateUniqueFilename($file));

        return response()->json([
            'status' => 'success',
            'id' => $image->id,
            'url' => $image->getUrl()
        ]);
    }

    /**
     * Генерация уникального имени файла.
     *
     * Todo: вынести эту хрень куда-нибудь.
     *
     * @param  File
     * @return string
     */
    protected function generateUniqueFilename($file)
    {
        return uniqid('product', true) . '.' .  $file->extension();
    }
}
