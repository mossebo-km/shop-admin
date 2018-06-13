<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\CategoryI18n as BaseCategoryI18n;

class CategoryI18n extends BaseCategoryI18n
{
    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'category_id',
        'language_code',
        'title',
        'description',
        'meta_title',
        'meta_description'
    ];
}
