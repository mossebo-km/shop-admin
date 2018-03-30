<?php

namespace App\Validation;

use Validator;

class ValidatorExtend
{
    /**
     * Получение primary key модели.
     *
     * @param $model
     * @return mixed
     */
    protected static function _getModelKeyName($model)
    {
        return (new $model)->getKeyName();
    }

    /**
     * Проверка существования записи в таблице.
     *
     * @param string $modelClassName
     * @param mixed $value
     * @param null $primaryKeyFieldName
     * @return mixed
     */
    protected static function _recordExist($modelClassName, $value, $primaryKeyFieldName = null)
    {
        if (is_null($primaryKeyFieldName)) {
            $primaryKeyFieldName = self::_getModelKeyName($modelClassName);
        }

        return $modelClassName::where($primaryKeyFieldName, $value)->exists();
    }

    /**
     * Проверка существования множества записей в таблице.
     *
     * @param string $modelClassName
     * @param mixed $value
     * @param null $primaryKeyFieldName
     * @return bool
     */
    protected static function _manyRecordsExist($modelClassName, $value, $primaryKeyFieldName = null)
    {
        if (is_null($primaryKeyFieldName)) {
            $primaryKeyFieldName = self::_getModelKeyName($modelClassName);
        }

        $toCheck = is_array($value) ? $value : [$value];
        $toCheck = array_unique($toCheck);

        if (! $primaryKeyFieldName) {
            $primaryKeyFieldName = self::_getModelKeyName($modelClassName);
        }

        return count($toCheck) === $modelClassName::where($primaryKeyFieldName, $toCheck)->count();
    }

    /**
     * Проверка доступности slug.
     *
     * @param $modelClassName
     * @param $value
     * @param bool $excludedId
     * @return bool
     */
    protected static function _slugAvailable($modelClassName, $value, $excludedId = false)
    {
        $query = $modelClassName::where('slug', $value);

        if ($excludedId !== false) {
            $query->where($modelClassName::getPrimaryKey(), '!=', $excludedId);
        }

        return !$query->exists();
    }

    /**
     * Проверка доступности parent_id.
     *
     * @param $modelClassName
     * @param $recordId
     * @param $parentId
     * @param null $parentFieldName
     * @return bool
     */
    protected static function _parentIdAvailable($modelClassName, $recordId, $parentId, $parentFieldName = null)
    {
        if ((int) $parentId === 0) {
            return true;
        }

        if (is_null($parentFieldName)) {
            $parentFieldName = 'parent_id';
        }

        if (! self::_recordExist($modelClassName, $parentId)) {
            return false;
        }

        $childrensIds = app()->make('App\Contracts\Repositories\CategoryRepository')->getAllChildsIds($recordId);
        $childrensIds[] = $recordId;

        return !in_array($parentId, $childrensIds);
    }

    public static function recordExists()
    {
        Validator::extend('record_exists', function ($attribute, $value, $parameters) {
            return self::_recordExist(
                $parameters[0],
                $value,
                isset($parameters[1]) ? $parameters[1] : null
            );
        }, 'Выбранное значение для :attribute некорректно.');
    }

    public static function manyRecordsExists()
    {
        Validator::extend('many_records_exists', function ($attribute, $value, $parameters) {
            return self::_manyRecordsExist(
                $parameters[0],
                $value,
                isset($parameters[1]) ? $parameters[1] : null
            );
        }, 'Выбранное значение для :attribute некорректно.');
    }

    public static function slugAvailable()
    {
        Validator::extend('slug_available', function ($attribute, $value, $parameters) {
            return self::_slugAvailable($parameters[0], !isset($parameters[1]) ?: $parameters[1]);
        }, 'Выбранное значение для :attribute уже занято.');
    }

    public static function parentIdAvailable()
    {
        Validator::extend('parent_id_available', function ($attribute, $value, $parameters) {
            return self::_parentIdAvailable(
                $parameters[0],
                $parameters[1],
                $value,
                isset($parameters[2]) ? $parameters[2] : null
            );
        }, 'Выбранное значение для :attribute недоступно.');
    }
}