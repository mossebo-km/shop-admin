<?php

namespace App\Http\Controllers;

use App\Models;

class DataHandler
{
    protected static $repositories = [
        'categories'  => \Categories::class,
        'currencies'  => \Currencies::class,
        'languages'   => \Languages::class,
        'price-types' => \PriceTypes::class,
    ];

    protected static $cacheKey = 'interactionData';

    /**
     * Проверка - является ли ключ устаревшим.
     *
     * @param $key
     * @return bool
     */
    public function keyIsRelevant($key)
    {
        return $key == self::getRelevantKey();
    }

    /**
     * Получение свежего ключа.
     *
     * @return mixed
     */
    public static function getRelevantKey()
    {
        // todo: Добавить отдельное кэширование для каждого типа данных.

//        \Cache::flush();
        return \Cache::remember(self::$cacheKey, 18000, function () {
            return md5(uniqid());
        });
    }

    /**
     * Чистка кэша.
     *
     * @param null $dataType
     */
    public static function clearCache($dataType = null)
    {
        // todo: Добавить отчистку кэша по типу данных.

        \Cache::flush();
    }

    /**
     * Сбор данных.
     *
     * @param array $labels
     * @return array|mixed
     */
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

    /**
     * Получение данных из метода.
     *
     * @param $label
     * @param $data
     */
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

    /**
     * Получение данных из репозитория.
     *
     * @param $label
     * @param $data
     */
    protected static function _connectFromRepository($label, &$data)
    {
        $data[$label] = self::_getRepository($label)::all();
    }

    /**
     * Дерево категорий.
     *
     * @return mixed
     */
    protected static function _getCategoriesTree()
    {
        return self::_getRepository('categories')::getTree(0, true);
    }

    /**
     * Поставщики.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    protected static function _getSuppliers()
    {
        return Models\Supplier::all();
    }

    /**
     *
     * @param $label
     * @return mixed
     */
    protected static function _getRepository($label)
    {
        return self::$repositories[$label];
    }
}