<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Config;
use DB;

class ModelI18 extends Model
{
    protected $tableIdentif;
    protected $translateTableName;
    protected $translateRelationField;

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);

        $this->table = Config::get("migrations.{$this->tableIdentif}");
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