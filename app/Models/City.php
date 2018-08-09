<?php

namespace App\Models;

use MosseboShopCore\Models\City as BaseCity;
use Laravel\Scout\Searchable;

class City extends BaseCity
{
    use Searchable;

    protected $fillable = [
        'lat',
        'lon',
        'region_id',
        'name',
        'short_name',
        'postal_code',
        'enabled',
    ];


    public function country()
    {
        return $this->hasOne(Country::class, 'code', 'country_code');
    }

    public function region()
    {
        return $this->hasOne(Region::class, 'id', 'region_id');
    }

    public function toSearchableArray()
    {
        $data = [
            'id' => $this->id,
            'name' => $this->name,
            'short_name' => $this->short_name,
        ];

        if ($this->region) {
            $regionName = [];

            $regionName[] = $this->region->name . ' ' . $this->region->short_name;

            foreach ($this->region->ancestors as $ancestor) {
                $regionName[] = $ancestor->name . ' ' . $ancestor->short_name;
            }

            $data['region'] = implode(', ', $regionName);
        }

        return $data;
    }
}