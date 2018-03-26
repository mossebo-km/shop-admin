<?php

namespace App\Models\Base;

use Config;

class BaseModelI18 extends BaseModel
{
    protected $translateTableName;
    protected $translateRelationField;

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);

        $this->translateTableName = Config::get("migrations.{$this->tableIdentif}I18");
    }

    public function i18()
    {
        return $this->hasMany($this->getI18ModelName(), $this->translateRelationField);
    }

    public static function withTranslate($languageCode = null)
    {
        return self::addTranslateToQuery($languageCode ?: 'ru');
    }

    public function getI18ModelName()
    {
        return get_class($this) . 'I18';
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


    protected function _saveI18(Array $translates = [])
    {
        $i18 = $this->i18();
        $i18->whereIn('language_code', array_keys($translates))->delete();

        $i18ModelClassName = $this->getI18ModelName();

        foreach ($translates as $languageCode => $i18Data) {
            $i18Data['language_code'] = $languageCode;
            $i18->save(new $i18ModelClassName($i18Data));
        }
    }
}