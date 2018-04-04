<?php

namespace App\Http\Controllers;

use App\Models\Product;

class TestController extends Controller
{
    public function imageConverter()
    {
        foreach (Product::all() as $product) {
            $tempImages = $product->getMedia('images') ?: [];

            foreach ($tempImages as $image) {
                $image = $image->move($product, 'temp');
                $image->move($product, 'images');
            }
        }
    }
}
