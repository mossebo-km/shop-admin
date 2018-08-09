<?php

namespace App\Http\Resources\Shop;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\MediaResource;

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
        $options = $this->attributeOptionRelations()->get(['attribute_id', 'option_id'])->toArray();
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
            'images'      => MediaResource::collection($this->getMedia()),
            'prices'      => PriceResource::collection($this->prices),
            'categories'  => ProductCategoriesResource::collection($this->categoryRelations),
            'rooms'       => ProductRoomsResource::collection($this->roomRelations),
            'styles'      => ProductStylesResource::collection($this->styleRelations),
            'related'     => ProductRelatedSearchResource::collection($this->related),
            'i18n'        => $this->i18n()->get()->toArray(),
            'attributes'  => $attributesIds,
            'options'     => $optionsIds
        ];
    }
}