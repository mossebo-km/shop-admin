<?php

namespace App\Models\Shop;

use MosseboShopCore\Models\Shop\RoomProduct as BaseRoomProduct;

class RoomProduct extends BaseRoomProduct
{
    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = [
        'room_id',
        'product_id'
    ];

    public $timestamps = false;

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
