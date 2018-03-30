<?php

namespace App\MediaLibrary\Models;

use Spatie\MediaLibrary\Models\Media as Base;
use Spatie\MediaLibrary\Conversion\ConversionCollection;

class Media extends Base
{
    public function save(array $options = [])
    {
        if (!$this->id) {
            parent::save($options);
        }

        $this->pathes = json_encode($this->generateImagePathes());
        parent::save($options);
    }

    public function generateImagePathes()
    {
        $pathes = [
            'original' => $this->getUrl()
        ];

        foreach ($this->responsive_images as $conversionName => $imageUrl) {
            $conversionImages = $this->responsiveImages($conversionName);

            $imageUrls = $conversionImages->getUrls();

            if (isset($imageUrls[0])) {
                $pathes[$conversionName]['src'] = $imageUrls[0];
            }

            if (isset($imageUrls[1])) {
                $pathes[$conversionName]['srcset'] = $imageUrls[1];
            }
        }

        return $pathes;
    }

    public function getImagePathes()
    {
        return $this->pathes ? json_decode($this->pathes, true) : [
            'original' => $this->getUrl()
        ];
    }
}