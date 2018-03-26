<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models as Models;
use App\Events as Events;
use App\Http\Resources as Resources;
use App\Models\Product;
use Validator;
use App\Validation\ValidatorExtend;
use App\Http\Requests\ProductSave;
use Illuminate\Pagination\LengthAwarePaginator;



// todo: создать очередь отчистки изображений из коллекции temp

class ProductController extends ApiController
{

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
     * Даныне товара.
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
     * Смена статуса товара.
     *
     * @param  Product
     * @return Repsonse
     */
    public function status(Product $product)
    {
        $product->enabled = !$product->enabled;
        $product->save();

        \Event::fire(new Events\ProductUpdated($product));

        return response()->json([
            'status' => 'success',
            'message' => $product->enabled ? "Товар #{$product->id} показан." : "Товар #{$product->id} скрыт."
        ], 201);
    }

    /**
     * Удаление товара.
     *
     * @param  Product
     * @return Response
     */
    public function delete(Product $product)
    {
        $product->delete();

        \Event::fire(new Events\ProductDeleted($product));

        return response()->json([
            'status' => 'success',
            'message' => "Товар #{$product->id} был удален."
        ], 200);
    }

    /**
     * Создание товара.
     *
     * @param  App\Http\Requests\ProductCreate
     * @return Response
     */
    public function store(ProductSave $request)
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

        /*

        */

        \Event::fire(new Events\ProductCreated($product));

        return response()->json([
            'status' => 'success',
            'message' => 'Товар успешно создан.',
            'redirect' => "/products/{$product->id}",
            'product' => new Resources\ProductEditResource($product)
        ], 200);
    }

    /**
     * Изменение товара.
     *
     * @param  App\Http\Requests\ProductUpdate
     * @param  Product
     * @return Response
     */
    public function update(ProductSave $request, Product $product)
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

        /*

        */

        \Event::fire(new Events\ProductUpdated($product));

        return response()->json([
            'status' => 'success',
            'message' => 'Товар успешно изменен.',
            'product' => new Resources\ProductEditResource($product)
        ], 200);
    }


    /**
     * Проверка существования slug.
     *
     * @param  Request
     * @return Response
     */
    public function slugAvailable(Request $request)
    {
        return response()->json([
            'status' => Product::slugAvailableForTable($request->input('slug')) ? 'success' : 'error'
        ]);
    }

    /**
     * Проверка существования slug у конкретного товара.
     *
     * @param  Request
     * @param  Product
     * @return Response
     */
    public function productSlugAvailable(Request $request, Product $product)
    {
        return response()->json([
            'status' => $product->slugAvailableForModel($request->input('slug')) ? 'success' : 'error'
        ]);
    }

    /**
     * Загрузка изображений для конкретного товара.
     *
     * @param  Request
     * @param  Product
     * @return Response
     */
    public function imageUpload(Request $request, Product $product)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'bail|file|image|mimes:jpeg,jpg,png|max:8000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->messages()->first('file')
            ]);
        }

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
