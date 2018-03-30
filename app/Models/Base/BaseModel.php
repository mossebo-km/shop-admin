<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;
use Config;

class BaseModel extends Model
{
    protected $tableIdentif;

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);

        $this->table = Config::get("migrations.{$this->tableIdentif}");
    }

    /**
     * Отсев данных, которые подходят для использования в этой модели.
     *
     * todo: В трейт?
     *
     * @param  Array
     * @return Array
     */
    protected function getFillableData(Array $data): Array
    {
        $fillable = $this->getFillable();

        return array_filter($data, function($key) use($fillable){
            return in_array($key, $fillable);
        }, ARRAY_FILTER_USE_KEY);
    }
}
