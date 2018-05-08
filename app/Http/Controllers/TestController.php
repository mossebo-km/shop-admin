<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Models\Product;

class TestController extends Controller
{
//    public function imageConverter($id)
//    {
//        $product = Product::where('id', $id)->first();
//        $tempImages = $product->getMedia('images') ?: [];
//
//        foreach ($tempImages as $image) {
//            $image = $image->move($product, 'temp');
//            $image->move($product, 'images');
//        }
//    }

    public function enableLanguages()
    {
        \App\Models\Language::where('enabled', false)->update([
            'enabled' => true
        ]);

        \App\Http\Controllers\DataHandler::clearAllCache();

        return redirect('/');
    }

    public function disableLanguages()
    {
        \App\Models\Language::where('default', false)->update([
            'enabled' => false
        ]);

        \App\Http\Controllers\DataHandler::clearAllCache();

        return redirect('/');
    }

    public function test() {
//        $product = Product::first();
//        $products = Product::all();
        $products = Product::with('prices')->first();



        echo "<pre>";
        print_r($products);
        return;
    }
}
