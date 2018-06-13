<?php

namespace App\Http\Resources\Shop;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\MediaResource;

class ProductsTableResource extends JsonResource
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
            'id'         => $this->id,
            'is_new'     => $this->is_new,
            'is_popular' => $this->is_popular,
            'is_payable' => $this->is_payable,
            'enabled'    => $this->enabled,
            'created_at' => dateFormatFull($this->created_at),
            'prices'     => PriceResource::collection($this->prices),
            'image'      => new MediaResource($this->image),
            'i18n'       => $this->i18n->toArray()
        ];
    }
}
