<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models as Models;
use App\Models\Product;
use App\Http\Collectors\Admin\ProductDataAdminCollector;

class ProductController extends Controller
{
    protected $availablePerPages = [
        '15',
        '30',
        '60'
    ];

    protected $availableSortFields = [
        'id',
        'title',
        'enabled',
        'created_at'
    ];

    protected $availableSortTypes = [
        'asc',
        'desc',
        'random'
    ];

    // protected $dataCollector;

    // public function __construct(ProductDataAdminCollector $dataCollector)
    // {
    //     $this->dataCollector = $dataCollector;
    // }

    public function index(Request $request)
    {
        $params = $this->_prepareParams($request->input());

        $pagination = $this->_paginate($params);

        $products = $pagination->getCollection();

        $productsIds = array_column($products->toArray(), 'id');

        $prices = Models\Price::whereIn('item_id', $productsIds)->where('item_type', 'product')->get();

        foreach ($products as $key => $product) {
            $productPrices = [];

            foreach ($prices as $priceKey => $price) {
                if ($product->id !== $price->item_id) continue;

                $productPrices[$price->price_type_id] = $price->formattedPrice();
                $prices->forget($priceKey);
            }

            $products[$key]['prices'] = $productPrices;
            $products[$key]['url'] = $product->url();
        }

        return [
            'items' => $products,
            'perPage' => $pagination->perPage(),
            'currentPage' => $pagination->currentPage(),
            'totalRows' => $pagination->total(),
        ];
    }


    /*
        Получаем постраничный список товаров.
    */

    protected function _paginate($params)
    {
        /*
            Проблема: ситуация, когда $currentPage * $perPage больше, чем существует записей в бд.
            Предполагаем, что это очень редкий случай. Поэтому нет смысла тянуть каждый раз текущее кол-во записей в таблице.
        */

        extract($params, EXTR_OVERWRITE);

        $query = Product::orderBy($sortBy, $sortType);

        if ($search) {
            $query = $query->where(\DB::raw('lower(title)'), 'like', "%" . mb_strtolower($search) . "%");
        }

        $pagination = $query->paginate($perPage, null, null, $currentPage);

        if ($pagination->isEmpty() && $currentPage > 1) {
            $currentPage = round($pagination->total() / $perPage);
            $currentPage = $this->_prepareParamCurrentPage($currentPage);

            $pagination = Product::orderBy($sortBy, $sortType)->paginate($perPage, null, null, $currentPage);
        }

        return $pagination;
    }


    /*
        Подготовка параметров отображения списка страниц.
    */

    protected function _prepareParams(Array $params)
    {
        $result = [];

        $existingParams = [
            'sortBy',
            'sortType',
            'perPage',
            'currentPage',
            'search'
        ];

        foreach ($existingParams as $paramName) {
            $methodName = '_prepareParam' . ucfirst($paramName);

            if (method_exists($this, $methodName)) {
                $result[$paramName] = call_user_func([$this, $methodName], isset($params[$paramName]) ? $params[$paramName] : null);
            }
            elseif (isset($params[$paramName])) {
                $result[$paramName] = $params[$paramName];
            }
            else {
                $result[$paramName] = null;
            }
        }

        return $result;
    }


    /*
        Отображаемое кол-во элементов на странице.
    */

    protected function _prepareParamPerPage($perPage = false)
    {
        if (array_search($perPage, $this->availablePerPages) === false) {
            $perPage = $this->availablePerPages[0];
        }

        return $perPage;
    }


    /*
        Сортировка по полю.
    */

    protected function _prepareParamSortBy($sortBy = false)
    {
        if (array_search($sortBy, $this->availableSortFields) === false) {
            $sortBy = $this->availableSortFields[0];
        }

        return $sortBy;
    }


    /*
        Направление (тип) сортировки.
    */

    protected function _prepareParamSortType($sortType = false)
    {
        if (!isset($sortType) || array_search($sortType, $this->availableSortTypes) === false) {
            $sortType = $this->availableSortTypes[0];
        }

        return $sortType;
    }


    /*
        Текущая страница.
    */

    protected function _prepareParamCurrentPage($currentPage = false)
    {
        return $currentPage <= 0 ? 1 : $currentPage;
    }


    public function show(Product $product)
    {
        $this->_connectPrices($product);
        $this->_connectCategories($product);
        $this->_connectImages($product);

        $data = [
            'product' => $product,
            'categories' => $this->_getCategories(),
            'currencies' => $this->_getCurrencies(),
        ];

        return $product;
    }

    /*
        Подключение связанных с продуктом категорий.
    */

    protected function _connectPrices(Product &$product)
    {
        $prices = [];

        foreach ($product->prices() as $price) {
            $prices[] = [
                'formatted'     => $price->formattedPrice(),
                'value'         => $price->value,
                'price_type_id' => $price->price_type_id,
                'currency_code' => $price->currency_code
            ];
        }

        $product['prices'] = $prices;
    }

    /*
        Подключение связанных с продуктом цен.
    */

    protected function _connectCategories(Product &$product)
    {
        $categories = [];

        foreach ($product->categoryProducts() as $relation) {
            $categories[] = $relation->category_id;
        }

        $product['categories'] = $categories;
    }


    /*
        Подключение связанных с продуктом изображений.
    */

    protected function _connectImages(Product &$product)
    {
        return [];
    }


    /*
        Подключение связанных с продуктом категорий.
    */

    protected function _getCategories()
    {
        return [];
    }


    /*
        Получение всех цен.
    */

    protected function _getCurrencies()
    {
        return CurrenciesHandler::getCollection()->toArray();
    }


    public function status(Product $product)
    {
        $product->enabled = !$product->enabled;
        $product->save();

        return response()->json([
            'status' => 'success',
            'message' => $product->enabled ? "Товар #{$product->id} показан." : "Товар #{$product->id} скрыт."
        ], 201);
    }

    public function store()
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Product $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return response()->json([
            'status' => 'success',
            'message' => "Товар #{$product->id} был удален."
        ], 200);
    }
}
