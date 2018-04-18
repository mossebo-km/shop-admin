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
        $options = $this->productAttributeOptions()->get(['attribute_id', 'option_id'])->toArray();
        $attributesIds = array_unique(array_column($options, 'attribute_id'));
        $optionsIds = array_column($options, 'option_id');

        return [
            'id'          => $this->id,
            'supplier_id' => $this->supplier_id,
            'is_new'      => $this->is_new,
            'is_popular'  => $this->is_popular,
            'is_payable'  => $this->is_payable,
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
            'i18n'         => $this->i18n()->get()->toArray(),
            'attributes'  => $attributesIds,
            'options'     => $optionsIds
        ];
    }
}