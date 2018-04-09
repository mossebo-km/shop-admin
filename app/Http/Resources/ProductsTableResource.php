<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
        $image = $this->getMedia('images')->first();

        return [
            'id'         => $this->id,
            'is_new'     => $this->is_new,
            'is_popular' => $this->is_popular,
            'is_payable' => $this->is_payable,
            'title'      => $this->title,
            'enabled'    => $this->enabled,
            'created_at' => dateFormatFull($this->created_at),
            'prices'     => PriceResource::collection($this->prices),
            'image'      => new MediaResource($image)
        ];
    }
}
