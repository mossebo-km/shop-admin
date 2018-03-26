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
        return [
            'id'         => $this->id,
            'slug'       => $this->slug,
            'is_new'     => $this->is_new,
            'is_popular' => $this->is_popular,
            'is_payable' => $this->is_payable,
            'title'      => $this->title,
            'enabled'    => $this->enabled,
            'prices'     => $this->prices,
            'created_at' => $this->created_at->format('H:m:i d/m/Y'),
        ];
    }
}
