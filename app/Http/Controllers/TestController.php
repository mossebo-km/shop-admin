<?php

namespace App\Http\Controllers;

use App\Models\Shop\Room\RoomProduct;
use App\Models\Shop\Category\CategoryProduct;
use App\Models\Shop\Product\ProductAttributeOption;
use App\Models\City;

use App\Models\Shop\Product\Product;
use App\Models\Shop\Badge\Badge;
use Categories;
use App\Models\Shop\Product\ProductCount;

class TestController extends Controller
{
    public function test()
    {
//        (new \App\Models\Admin)->saveFromRequestData([
//            'name' => 'Полина Карпенко',
//            'email' => 'art2@mossebo.ru',
//            'password' => encodePassword('bG1^gat$'),
//            'api_token' => str_random(60),
//            'enabled' => true
//        ]);


//        Categories::getCollection()->each(function ($category) {
//            $categories = $category->descendants()->pluck('id');
//            $categories->push($category->id);
//
//            $count = new ProductCount([
//                'category_id' => $category->id,
//                'count' => Product::enabled()->whereCategory($categories->toArray())->count(),
//            ]);
//
//            dd($count->toArray());
//        });


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
