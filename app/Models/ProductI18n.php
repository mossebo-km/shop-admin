<?php

namespace App\Models;

class ProductI18n extends Base\BaseModel
{
    protected $tableIdentif = 'ProductsI18n';

    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'product_id', 'language_code', 'title', 'description', 'meta_title', 'meta_description'
    ];
}