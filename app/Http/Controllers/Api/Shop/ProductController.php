<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Api\ApiController;

use Config;

use App\Models\Shop\Product;

use App\Http\Resources\Shop\ProductEditResource;
use App\Http\Resources\Shop\ProductsTableResource;

use App\Support\Traits\Controllers\Creatable;
use App\Support\Traits\Controllers\Updatable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\Sluggable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\ImageUploadable;

use Illuminate\Pagination\LengthAwarePaginator;


// todo: создать очередь отчистки изображений из коллекции temp

class ProductController extends ApiController
{
    use Creatable, Updatable, Deleteable, Sluggable, StatusChangeable, ImageUploadable;

    protected static $modelClass = Product::class;
    protected static $entityName = 'product';
    protected static $editResource = ProductEditResource::class;
    protected static $tableResource = ProductsTableResource::class;

    public function index()
    {
        $pagination = $this->_paginate($this->request->all());

        return [
            'products' => static::toResource($pagination->getCollection()),
            'perPage' => $pagination->perPage(),
            'page' => $pagination->currentPage(),
            'totalRows' => $pagination->total(),
        ];
    }

        // Убрать две функции ниже хз куда.
        public function _paginate(Array $params = []): LengthAwarePaginator
        {
            $pagination = $this->_makePagination($params);

            if ($pagination->isEmpty() && $params['page'] > 1) {
                $page = round($pagination->total() / $params['perPage']);
                $params['page'] = $page <= 0 ? 1 : $page;

                $pagination = $this->_makePagination($params);
            }

            return $pagination;
        }

        public function _makePagination(Array $params): LengthAwarePaginator
        {
            extract($params, EXTR_OVERWRITE);

            $productsTableName = Config::get('tables.Products');

            $sortBy = isset($sortBy) ? $sortBy : 'id';

            if ($sortBy === 'price') {
                $pricesTableName = Config::get('tables.Prices');

                $query = Product::leftJoin("{$pricesTableName} as prices", function ($join) use($productsTableName, $priceType) {
                      $join->on('prices.item_id', '=', "{$productsTableName}.id")
                        ->where('prices.item_type', 'product')
                        ->where('prices.price_type_id', $priceType)
                        ->where('prices.currency_code', 'RUB');
                    })
                    ->orderBy('prices.value', $sortType);
            }
            elseif ($sortBy === 'title') {
                $query = Product::withTranslate()->orderBy($sortBy, $sortType);
            }
            else {
                $query = Product::orderBy($sortBy, $sortType);
            }

            if (!empty($search)) {
                $i18nTableName = Config::get('tables.ProductsI18n');
                $query = $query->join("{$i18nTableName} as i18n", function ($join) use($productsTableName, $search) {
                    $join->on('i18n.product_id', '=', "{$productsTableName}.id")
                        ->where(\DB::raw('lower(title)'), 'like', "%" . mb_strtolower($search) . "%");
                });
            }

            return $query->select("{$productsTableName}.*")
                ->orderBy('id', $sortType)
                ->with(['i18n', 'prices', 'image', 'categoryRelations', 'roomRelations', 'styleRelations'])
                ->paginate($perPage, null, null, $page);
        }
}
