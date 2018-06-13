<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\RoomI18n as BaseRoomI18n;

class RoomI18n extends BaseRoomI18n
{
    public $timestamps = false;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'room_id',
        'language_code',
        'title',
        'description',
        'meta_title',
        'meta_description'
    ];
}
