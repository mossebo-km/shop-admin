<?php

namespace App\Http\Controllers;

use App\Models\Product;

class TestController extends Controller
{
    public function imageConverter($id)
    {
        set_time_limit(600);
        ini_set('max_execution_time', 600); //6 minutes
        ini_set('request_terminate_timeout', 600); //6 minutes

        $product = Product::where('id', $id)->first();
        $tempImages = $product->getMedia('images') ?: [];

        foreach ($tempImages as $image) {
            $image = $image->move($product, 'temp');
            $image->move($product, 'images');
        }
    }
}
