<?php

namespace App\Http\Controllers\Api\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;

use App\Models\Shop\Product\Product;
use App\Models\Shop\Product\ProductSale;
use App\Models\Shop\Price\Price;

use App\Http\Resources\Shop\Product\ProductSaleResource;
use App\Http\Resources\Shop\Product\ProductSearchResource;
use App\Http\Resources\Shop\Price\PriceResource;

use App\Support\Traits\Controllers\Creatable;
use App\Support\Traits\Controllers\Updatable;
use App\Support\Traits\Controllers\Deleteable;
use App\Support\Traits\Controllers\StatusChangeable;
use App\Support\Traits\Controllers\PositionChangeable;
use App\Support\Traits\ProductSearch;

class SaleController extends ApiController
{
    use Creatable,
        Updatable,
        Deleteable,
        StatusChangeable,
        PositionChangeable,
        ProductSearch;

    protected static $modelClass = ProductSale::class;
    protected static $entityName = 'sale-product';
    protected static $editResource = ProductSaleResource::class;
    protected static $tableResource = ProductSaleResource::class;

    public function index()
    {
        $sales = ProductSale::with('product')
            ->get();

        return [
            'sale-products' => ProductSaleResource::collection($sales),
        ];
    }

    /**
     * Поиск товаров
     */
    public function query(Request $request)
    {
        $ids = $this->searchResultToIds(
            $this->searchProducts($request->input('q'))->take(5)
        );

        $products = Product::whereIn('id', $ids)
            ->with('i18n')
            ->get();

        return [
            'status' => 'success',
            'result' => ProductSearchResource::collection($products)
        ];
    }

    public function price($productId)
    {
        $prices = Price::where('price_type_id', config('shop.price_types.sale'))
            ->where('item_id', $productId)
            ->where('item_type', 'product')
            ->get();

        return [
            'status' => 'success',
            'prices' => PriceResource::collection($prices)
        ];
    }

    protected function searchResultToIds($result)
    {
        return array_column($result->toArray(),'id');
    }
}
