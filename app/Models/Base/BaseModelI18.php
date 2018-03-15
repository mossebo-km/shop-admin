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
        return $this->hasMany(get_class($this) . 'I18', $this->translateRelationField);
    }

    public static function withTranslate($languageCode = null)
    {
        return self::connectTranslate($languageCode ?: 'ru');
    }

    protected static function connectTranslate($languageCode, $query = false)
    {
        $instance = new static;

        if (! $query) {
            $query = $instance->newQuery();
        }

        return $query
            ->join($instance->translateTableName, "{$instance->translateTableName}.{$instance->translateRelationField}", '=', "{$instance->table}.id")
            ->where("{$instance->translateTableName}.language_code", '=', $languageCode);
    }
}