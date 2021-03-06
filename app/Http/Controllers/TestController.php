<?php

namespace App\Http\Controllers;

use Categories;

use App\Models\Shop\Room\RoomProduct;
use App\Models\Shop\Category\CategoryProduct;
use App\Models\Shop\Product\ProductAttributeOption;
use App\Models\City;

use App\Models\Shop\Product\Product;
use App\Models\Shop\Price\Price;
use App\Models\Shop\Badge\Badge;
use App\Models\Shop\Product\ProductCount;
use App\Models\Shop\Category\Category;

class TestController extends Controller
{
    public function test()
    {
        $product = Product::where('id', 101789)->first();
        dd($product->toSearchableArray());

//        $descedantIds = Category::getDescendantIds(1);
//        dd($descedantIds);

//        (new \App\Models\Admin)->saveFromRequestData([
//            'name' => 'Владимир Сидоркин',
//            'email' => 'webdesign4@mossebo.ru',
//            'password' => encodePassword('01hT^1hbz'),
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

//        $getPrice = function ($prices, $priceTypeId) {
//            return $prices->where('price_type_id', $priceTypeId)
//                ->where('currency_code', 'RUB')
//                ->first();
//        };
//
//        $products = Product::with('prices')->get();
//
//        $result = 100;
//        $a = 0;
//
//        foreach ($products as $product) {
//            $mmr = $getPrice($product->prices, 2);
//            $zakup = $getPrice($product->prices, 4);
//
//            if (! ($mmr && $zakup)) continue;
//
//            $diff = $mmr->value - $zakup->value;
//
//            if ($diff > 0) {
//                $percent = $diff / $zakup->value * 100;
//                $b[$product->id][] = $percent;
//
//                if ($percent < $result) {
//                    $result = $percent;
//                    $a = $product;
//                }
//            }
//        }

        dd('done');
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
