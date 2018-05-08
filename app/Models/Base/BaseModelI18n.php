<?php

namespace App\Models\Base;

use Config;

abstract class BaseModelI18n extends BaseModel
{
    protected $translateTableName;
    protected $translateRelationField;

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);

        $this->translateTableName = Config::get("migrations.{$this->tableIdentif}I18n");
    }

    public function i18n()
    {
        return $this->hasMany($this->getI18nModelName(), $this->translateRelationField);
    }

    public function getI18nModelName()
    {
        return get_class($this) . 'I18n';
    }

    public static function withTranslate($languageCode = null)
    {
        return self::addTranslateToQuery($languageCode ?: 'ru');
    }

    protected static function addTranslateToQuery($languageCode, $query = false)
    {
        $instance = new static;

        if (! $query) {
            $query = $instance->newQuery();
        }

        return $query
            ->join($instance->translateTableName, "{$instance->translateTableName}.{$instance->translateRelationField}", '=', "{$instance->table}.id")
            ->where("{$instance->translateTableName}.language_code", '=', $languageCode);
    }


    protected function _saveI18n(Array $translates = [])
    {
        $i18n = $this->i18n();
        $i18n->whereIn('language_code', array_keys($translates))->delete();

        $i18nModelClassName = $this->getI18nModelName();

        foreach (\Languages::enabled() as $language) {
            if (!isset($translates[$language['code']])) continue;

            $i18nData = $translates[$language['code']];
            $i18nData['language_code'] = $language['code'];
            $i18n->save(new $i18nModelClassName($i18nData));
        }
    }
}