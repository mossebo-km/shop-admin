<?php

namespace App\Models\Shop\Badge;

use MosseboShopCore\Models\Shop\Badge\BadgeType as BaseBadgeType;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\I18nTrait;
use App\Support\Traits\Models\Positionable;

class BadgeType extends BaseBadgeType
{
    use RequestSaver, I18nTrait, Positionable;

    protected $fillable = [
        'icon',
        'color',
        'has_value',
    ];

    protected $needsToSaveFromRequest = [
        'i18n',
    ];
}