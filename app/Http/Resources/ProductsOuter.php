<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductsOuter extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $image = $this->getMedia('images')->first();
        $price = $this->prices->where('currency_code', 'RUB')->where('price_type_id', 2)->first();
        $oldPrice = $this->prices->where('currency_code', 'RUB')->where('price_type_id', 1)->first();

        return [
            'id'        => $this->id,
            'name'      => $this->title,
            'price'     => $price ? $price->value : null,
            'old_price' => $oldPrice ? $oldPrice->value : null,
            'image'     => $image ? $image->getImagePathes()['small']['src'] : '',
        ];
    }
}