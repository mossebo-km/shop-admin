<?php

namespace App\Http\Controllers;

use App\Models;

class DataHandler
{
    protected static $repositories = [
        'categories' => 'App\Contracts\Repositories\CategoryRepository',
        'currencies' => 'App\Contracts\Repositories\CurrencyRepository',
        'languages'  => 'App\Contracts\Repositories\LanguageRepository',
        'price-type' => 'App\Contracts\Repositories\PriceTypeRepository',
    ];

    protected static $cacheKey = 'interactionData';

    public function keyIsRelevant($key)
    {
        return $key == self::getRelevantKey();
    }

    public static function getRelevantKey()
    {
        // todo: Добавить отдельное кэширование для каждого типа данных.

        // \Cache::flush();
        return \Cache::remember(self::$cacheKey, 18000, function () {
            return md5(uniqid());
        });
    }

    public static function clearCache($dataType = null)
    {
        // todo: Добавить отчистку кэша по типу данных.

        \Cache::flush();
    }

    public static function get(Array $labels = [])
    {
        $data = [];

        foreach ($labels as $label) {
            if (isset(self::$repositories[$label])) {
                self::_connectFromRepository($label, $data);
            }
            else {
                self::_connectFromMethod($label, $data);
            }
        }

        if (count($labels) === 1) {
            return $data[$label];
        }

        return $data;
    }

    protected static function _connectFromMethod($label, &$data)
    {
        $methodName = '_get';

        foreach (explode('-', $label) as $value) {
            $methodName .= ucfirst($value);
        }

        if (method_exists(get_class(), $methodName)) {
            try {
                $data[$label] = call_user_func([get_class(), $methodName]);
            } catch (\Exception $e) {
                dd($e);
            }
        }
    }

    protected static function _connectFromRepository($label, &$data)
    {
        $data[$label] = self::_getRepository($label)->all();
    }

    protected static function _getCategoriesTree()
    {
        return self::_getRepository('categories')->getTree(0, true);
    }

    protected static function _getRepository($label)
    {
        return app()->make(self::$repositories[$label]);
    }
}