<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Price;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Product::all();

            $productsIds = array_reduce($products->toArray(), function($carry, $item) {
                $carry[] = $item['id'];
                return $carry;
            }, []);


            $prices = Price::whereIn('item_id', $productsIds)->where('item_type', 'App\Models\Product')->get();

            foreach ($products as $key => $product) {
                $productPrices = [];

                foreach ($prices as $priceKey => $price) {
                    if ($product->id !== $price->item_id) continue;

                    $productPrices[$price->price_type_id] = $price->display();
                    $prices->forget($priceKey);
                }

                $products[$key]['prices'] = $productPrices;
            }
        } catch (\Exception $e) {
            dd($e);
        }


        return $products;
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function status(Product $product)
    {
        $product->enabled = !$product->enabled;
        $product->save();

        return response()->json([
            'message' => $product->enabled ? "Товар #{$product->id} показан." : "Товар #{$product->id} скрыт."
        ], 201);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function delete(Request $request, Product $product)
    {
        try {
            $product->delete();
        } catch (\Exception $e) {
            dd($e);
        }


        return response()->json(null, 204);
    }
}
