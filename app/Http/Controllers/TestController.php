<?php

namespace App\Http\Controllers;

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
    }
}
