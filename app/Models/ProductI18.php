<?php

namespace App\Models;

class ProductI18 extends Base\BaseModel
{
    protected $tableIdentif = 'ProductsI18';

    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'product_id', 'language_code', 'title', 'description', 'meta_title', 'meta_description'
    ];
}