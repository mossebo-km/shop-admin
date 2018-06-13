<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\StyleI18n as BaseStyleI18n;

class StyleI18n extends BaseStyleI18n
{
    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'style_id',
        'language_code',
        'title',
        'description',
        'meta_title',
        'meta_description'
    ];
}
