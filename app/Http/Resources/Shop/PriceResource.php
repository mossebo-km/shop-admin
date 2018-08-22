<?php

namespace App\Http\Resources\Shop;

use Illuminate\Http\Resources\Json\JsonResource;

class PriceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'formatted'     => $this->getFormatted(), // нужно ли?
            'value'         => $this->value,
            'price_type_id' => $this->price_type_id,
            'currency_code' => $this->currency_code
        ];
    }
}
