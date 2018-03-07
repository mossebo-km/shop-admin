<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use Cache;

class CurrenciesHandler extends Controller
{
    protected static $collection;

    protected static $cacheKey = 'CurrenciesTable';

    public static function getCollection()
    {
        // Cache::forget(self::$cacheKey);
        return self::$collection ?: self::$collection = Cache::remember(self::$cacheKey, 18000, function () {
            return Models\Currency::get();
        });
    }

    // public static function onTableUpdate()
    // {

    // }
}
