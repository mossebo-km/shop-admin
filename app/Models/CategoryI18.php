<?php

namespace App\Models;

class CategoryI18 extends Base\BaseModel
{
    protected $tableIdentif = 'CategoriesI18';

    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'category_id', 'language_code', 'title', 'description', 'meta_title', 'meta_description'
    ];

    protected $hidden = [
        'deleted_at'
    ];

    protected $dates = [
        'deleted_at'
    ];
}
