<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
      try {
        $products = Product::all();

        foreach ($products as $key => $item) {
          $prices = [];

          foreach ($item->prices()->get() as $price) {
            // dd($price->display());
            $prices[$price->price_type_id] = $price->display();
          }

          $products[$key]['prices'] = $prices;
        }

        return $products;
      } catch (\Exception $e) {
        dd($e);
      }

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
        $product->delete();

        return response()->json(null, 204);
    }
}
