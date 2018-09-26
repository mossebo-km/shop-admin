<?php

namespace App\Support\Traits;

use Illuminate\Support\Collection;
use App\Models\Shop\Product\Product;

trait ProductSearch
{
    function searchProducts($query): Collection
    {
        return Product::search($query, function($client, $query, $params) {
            $params['body'] = [
                'from' => 0,
                'size' => 10000,
                'query' => [
                    'match' => [
                        'index' => [
                            'query' => "*{$query}*",
//                            'query' => '*',
                            'fuzziness' => 'auto',
                            'operator' => 'and'
                        ]
                    ]
                ]
            ];

            return $client->search($params);
        })->get();
    }
}