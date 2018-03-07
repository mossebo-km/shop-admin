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

    public function newQuery()
    {
        return self::connectTranslate('ru', parent::newQuery());
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