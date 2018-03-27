<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryEditResource extends JsonResource
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
            'slug'       => $this->slug,
            'parent_id'  => $this->parent_id,
            'enabled'    => $this->enabled,
            'created_at' => $this->created_at->format('H:m:i d/m/Y'),
            'updated_at' => $this->updated_at->format('H:m:i d/m/Y'),
            'i18'        => $this->i18->toArray()
        ];
    }
}
