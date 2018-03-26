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
}
