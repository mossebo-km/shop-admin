<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductEditResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = [
            'id'          => $this->id,
            'supplier_id' => $this->supplier_id,
            'is_new'      => $this->is_new,
            'is_popular'  => $this->is_popular,
            'is_payable'  => $this->is_payable,
            'title'       => $this->title,
            'enabled'     => $this->enabled,
            'width'       => $this->width,
            'height'      => $this->height,
            'length'      => $this->length,
            'weight'      => $this->weight,
            'created_at'  => dateFormatFull($this->created_at),
            'updated_at'  => dateFormatFull($this->updated_at),
            'images'      => MediaResource::collection($this->getMedia('images')),
            'prices'      => PriceResource::collection($this->prices),
            'categories'  => ProductCategoriesResource::collection($this->categoryProducts),
            'i18'         => $this->i18->toArray()
        ];

        return $data;
    }
}