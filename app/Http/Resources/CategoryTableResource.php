<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryTableResource extends JsonResource
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
             'id' => $this->id,
             'parent_id' => $this->parent_id,
             'slug' => $this->slug,
             'enabled' => $this->enabled,
             'products_count' => $this->products_count,
             'position' => $this->position,
             'i18n' => $this->i18n()->get()->toArray(),
         ];

         if (! empty($this->children)) {
             $data['children'] = CategoryTableResource::collection($this->children);
         }

         return $data;
    }
}