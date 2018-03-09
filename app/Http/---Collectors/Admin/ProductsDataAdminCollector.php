<?php

namespace App\Http\Collectors\Admin;

use App\Http\Collectors\Base\BaseCollector;
use App\Models;

class ProductDataAdminCollector extends BaseCollector
{
    protected $fields = [
        'id', 'title', 'price', 'created_at', 'enabled'
    ];

    protected function _getPrice($dataObj)
    {
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
    }
}