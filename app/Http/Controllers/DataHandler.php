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
        'roles'       => \AdminRoles::class,
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
    public static function clearCache($dataTypeOrModelClassName = false)
    {
        // todo: Добавить отчистку кэша по типу данных.

        if (!$dataTypeOrModelClassName) {
            self::clearAllCache();
            return;
        }

        if (isset(self::$repositories[$dataTypeOrModelClassName])) {
            self::$repositories[$dataTypeOrModelClassName]::clearCache();
            \Cache::forget(self::$cacheKey);
            return;
        }

        $modelClassName = $dataTypeOrModelClassName;

        foreach (self::$repositories as $repo) {
            if ($repo::getModelClassName() === $modelClassName) {
                $repo::clearCache();
                \Cache::forget(self::$cacheKey);
                return;
            }
        }
    }

    public static function clearAllCache()
    {
        foreach (self::$repositories as $repository) {
            $repository::clearCache();
        }

        \Cache::forget(self::$cacheKey);
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

        if (method_exists(__CLASS__, $methodName)) {
            try {
                $data[$label] = call_user_func([__CLASS__, $methodName]);
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
        return self::_getRepository('categories')::getTree(['i18n']);
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