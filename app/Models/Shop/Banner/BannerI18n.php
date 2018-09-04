<?php

namespace App\Models\Shop\Banner;

use MosseboShopCore\Models\Shop\Banner\BannerI18n as BaseBannerI18n;

class BannerI18n extends BaseBannerI18n
{
    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'banner_id',
        'language_code',
        'title',
        'caption',
        'button',
        'link'
    ];
}
