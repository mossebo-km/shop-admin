<?php

namespace App\Http\Controllers;

use App\Models\Shop\RoomProduct;
use App\Models\Shop\CategoryProduct;
use App\Models\Shop\ProductAttributeOption;
use App\Models\City;

use App\Models\Shop\Product;
use App\Models\Shop\Badge\Badge;

class TestController extends Controller
{
    public function test()
    {
        $popular = Product::where('is_new', 1)->get();

        foreach ($popular as $product) {
            $product->badges()->save(new Badge([
                'badge_type_id' => 6
            ]));
        }
    }
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
}
