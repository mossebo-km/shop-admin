<?php

namespace App\Models\Shop\Badge;

use MosseboShopCore\Models\Shop\Badge\BadgeTypeI18n as BaseBadgeTypeI18n;

class BadgeTypeI18n extends BaseBadgeTypeI18n
{
    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'badge_type_id',
        'language_code',
        'title',
    ];
}