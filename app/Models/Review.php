<?php

namespace App\Models;

use App\Models\Shop\Product;
use App\Support\Traits\Models\RequestSaver;
use App\Support\Traits\Models\StatusChangeable;
use MosseboShopCore\Models\Review as BaseReview;
use Cog\Contracts\Love\Likeable\Models\Likeable as LikeableContract;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;

class Review extends BaseReview implements LikeableContract
{
    use Likeable, StatusChangeable, RequestSaver;

    protected $fillable = [
        'item_type',
        'item_id',
        'language_code',
        'user_id',
        'rate',
        'advantages',
        'disadvantages',
        'comment',
        'usage_time',
        'confirmed',
        'enabled'
    ];

    public function item()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
