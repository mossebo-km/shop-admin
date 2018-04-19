<?php

namespace App\Models;

class CategoryI18n extends Base\BaseModel
{
    protected $tableIdentif = 'CategoriesI18n';

    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'category_id', 'language_code', 'title', 'description', 'meta_title', 'meta_description'
    ];
}
