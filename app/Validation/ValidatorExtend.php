<?php

namespace App\Validation;

use Validator;

class ValidatorExtend
{
    /*
        Проверяет наличие
    */

    public static function existsModel()
    {
        Validator::extend('exists_model', function ($attribute, $value, $parameters) {
            $model = $parameters[0];
            $field = isset($parameters[1]) ? $parameters[1] : 'id';

            return $model::whereIn($field, $value)->exists();
        }, 'Выбранное значение для :attribute некорректно.');
    }

    public static function existsModelMany()
    {
        Validator::extend('exists_model_many', function ($attribute, $value, $parameters) {
            if (empty($value)) return true;

            $toCheck = is_array($value) ? $value : [$value];
            $toCheck = array_unique($toCheck);

            $model = $parameters[0];
            $field = isset($parameters[1]) ? $parameters[1] : 'id';

            return count($toCheck) === $model::whereIn($field, $toCheck)->count();
        }, 'Выбранное значение для :attribute некорректно.');
    }

    public static function slugAvailable()
    {
        Validator::extend('slug_available', function ($attribute, $value, $parameters) {
            $model = $parameters[0];
            $excludedId = isset($parameters[1]) ? $parameters[1] : false;

            $query = $model::where('slug', $value);

            if ($excludedId !== false) {
                $query->where($model::getPrimaryKey(), '!=', $excludedId);
            }

            return !$query->exists();
        }, 'Выбранное значение для :attribute уже занято.');
    }
}