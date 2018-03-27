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
            'id'         => $this->id,
            'slug'       => $this->slug,
            'is_new'     => $this->is_new,
            'is_popular' => $this->is_popular,
            'is_payable' => $this->is_payable,
            'title'      => $this->title,
            'enabled'    => $this->enabled,
            'created_at' => $this->created_at->format('H:m:i d/m/Y'),
            'updated_at' => $this->updated_at->format('H:m:i d/m/Y'),
            'images'     => MediaResource::collection($this->getMedia('images')),
            'prices'     => PriceResource::collection($this->prices),
            'categories' => ProductCategoriesResource::collection($this->categoryProducts),
            'i18'        => $this->i18->toArray()
        ];

        return $data;
    }
}