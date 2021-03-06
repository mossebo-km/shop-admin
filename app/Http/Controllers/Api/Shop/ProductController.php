<?php

namespace App\Http\Controllers\Api\Shop;

use App\Http\Controllers\Api\ApiController;

use Illuminate\Http\Request;
use Config;

use App\Models\Shop\Product\Product;

use App\Http\Resources\Shop\Product\ProductEditResource;
use App\Http\Resources\Shop\Product\ProductsTableResource;
use App\Http\Resources\Shop\Product\ProductSearchResource;

use App\Support\Traits\Controllers\Creatable;
use App\Support\Traits\Controllers\Updatable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\Sluggable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\ImageUploadable;
use App\Support\Traits\ProductSearch;

use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends ApiController
{
    use Creatable,
        Updatable,
        Deleteable,
        Sluggable,
        StatusChangeable,
        ImageUploadable,
        ProductSearch;

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

        //todo: Убрать две функции ниже хз куда.
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
            $i18nTableName = Config::get('tables.ProductsI18n');
            $pricesTableName = Config::get('tables.Prices');

            $sortBy = isset($sortBy) ? $sortBy : 'id';

            $query = Product::select("{$productsTableName}.*")
                ->localized();

            if ($sortBy === 'price') {
                $query->leftJoin("{$pricesTableName} as prices", function ($join) use($productsTableName, $priceType) {
                      $join->on('prices.item_id', '=', "{$productsTableName}.id")
                        ->where('prices.item_type', 'product')
                        ->where('prices.price_type_id', $priceType)
                        ->where('prices.currency_code', 'RUB');
                    })
                    ->orderBy('prices.value', $sortType);
            }
            elseif ($sortBy === 'title') {
                $query->orderBy("{$i18nTableName}.title", $sortType);
            }
            else {
                $query->orderBy($sortBy, $sortType);
            }

            if (! empty($search)) {
                $query->where(\DB::raw("lower({$i18nTableName}.title)"), 'like', "%" . mb_strtolower($search) . "%");
            }

            if ($type === 'no-image') {
                $query->hasNoImage();
            }
            elseif ($type !== 'all') {
                $badgeTableName = config('tables.Badges');
                $productTableName = config('tables.Products');

                switch ($type) {
                    case 'popular':
                        $badgeTypeId = 1;
                        break;

                    case 'new':
                        $badgeTypeId = 6;
                        break;
                }

                $query->join("{$badgeTableName}", function($join) use($badgeTableName, $productTableName, $badgeTypeId) {
                        $join->on("{$badgeTableName}.item_id", '=', "{$productTableName}.id")
                            ->where("{$badgeTableName}.item_type", 'product')
                            ->where("{$badgeTableName}.badge_type_id", $badgeTypeId);
                    });
            }

            return $query
                ->orderBy('id', $sortType)
                ->with(['i18n', 'prices', 'image', 'categoryRelations', 'roomRelations', 'styleRelations'])
                ->paginate($perPage, null, null, $page);
        }

    /**
     * Поиск товаров
     */
    public function query(Request $request, $productId)
    {
        $ids = $this->searchProducts($request->input('q'))->take(6);
        $ids = array_column($ids->toArray(),'id');

        $products = Product::with([
            'i18n',
        ])
            ->whereIn('id', $ids)
            ->where('id', '!=', $productId)
            ->take(5)
            ->get();

        return [
            'status' => 'success',
            'result' => ProductSearchResource::collection($products)
        ];
    }

    protected function searchResultToIds($result)
    {
        return array_column($result->toArray(),'id');
    }
}
