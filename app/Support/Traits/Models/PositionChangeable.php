<?php

namespace App\Support\Traits\Models;

trait PositionChangeable
{
    public static function savePositions(Array $ids = [])
    {
        \DB::transaction(function() use($ids) {
            foreach ($ids as $position => $id) {
                self::where('id', $id)->update(['position' => $position]);
            }
        });
    }
}