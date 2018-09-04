<?php

namespace App\Models\Shop\Badge;

use MosseboShopCore\Models\Shop\Badge\Badge as BaseBadge;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\I18nTrait;
use App\Support\Traits\Models\Positionable;

class Badge extends BaseBadge
{
    protected $fillable = [
        'item_type',
        'item_id',
        'badge_type_id',
        'value',
        'position'
    ];

    public function item()
    {
        return $this->morphTo();
    }

    public function type()
    {
        return $this->hasOne(BadgeType::class, 'id', 'badge_type_id');
    }
}