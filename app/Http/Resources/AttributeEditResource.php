<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttributeEditResource extends JsonResource
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
            'id'           => $this->id,
            'enabled'      => $this->enabled,
            'selectable'   => $this->selectable,
            'layout_class' => $this->layout_class,
            'created_at'   => dateFormatFull($this->created_at),
            'updated_at'   => dateFormatFull($this->updated_at),
            'options'      => AttributeOptionResource::collection($this->options()->with('i18n')->get()),
            'i18n'          => $this->i18n->toArray()
        ];
    }
}
