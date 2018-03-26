<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MediaResource extends JsonResource
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
            'id'       => $this->id,
            'size'     => $this->size,
            'type'     => $this->mime_type,
            'original' => $this->getUrl(),
        ];

        foreach ($this->getMediaConversionNames() as $name) {
            $conversionImages = $this->responsiveImages($name);
            $imageUrls = $conversionImages->getUrls();

            $data[$name] = [
                'src' => $imageUrls[0],
                'srcset' => $imageUrls[1],
                'placeholder' => $conversionImages->getPlaceholderSvg(),
            ];
        }

        return $data;
    }
}