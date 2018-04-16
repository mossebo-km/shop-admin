<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttributeOptionResource extends JsonResource
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
            'id'       => $this->id,
            'enabled'  => $this->enabled,
            'position' => $this->position,
            'i18'      => $this->i18->toArray()
        ];
    }
}