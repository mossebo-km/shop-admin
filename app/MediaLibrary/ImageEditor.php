<?php

namespace App\MediaLibrary;

use Spatie\MediaLibrary\Models\Media as Media;
use Spatie\Image\Image as SpatieImage;
use Spatie\Image\Manipulations as SpatieManipulations;

// todo: в пакет Spatie\Image добавлены изменения. Они также добавлены и в гите. Как их примут - надо будет перекачать.

class ImageEditor
{
    protected $image;

    protected $manipulations;

    public function __construct(Media $image, array $manipulations = null)
    {
        $this->image = SpatieImage::load(public_path($image->getUrl()))
            ->useImageDriver(config('medialibrary.image_driver'));

        $this->manipulations = (new SpatieManipulations())
            ->optimize(config('medialibrary.image_optimizers'));

        if (!empty($manipulations)) {
            $this->setManipulations($manipulations);
        }

        return $this;
    }


    public function decode($modifications = [])
    {
        $issetX = isset($modifications['x']);
        $issetY = isset($modifications['y']);
        $issetWidth = isset($modifications['width']);
        $issetHeight = isset($modifications['height']);

        if ($issetX || $issetY || $issetWidth || $issetHeight) {
            $x = $issetX ? (int) $modifications['x'] : 0;
            $y = $issetY ? (int) $modifications['y'] : 0;
            $width = $issetWidth ? (int) $modifications['width'] : $this->image->getWidth();
            $height = $issetHeight ? (int) $modifications['height'] : $this->image->getHeight();

            $this->setManipulation('manualCrop', [
                $width,
                $height,
                $x,
                $y
            ]);
        }

        // Отражение изображения.
        $issetScaleX = isset($modifications['scaleX']);
        $issetScaleY = isset($modifications['scaleY']);

        if ($issetScaleX && $issetScaleY) {
            $this->setManipulation('flip', 'both');
        }
        elseif ($issetScaleX) {
            $this->setManipulation('flip', 'horizontally');
        } elseif ($issetScaleY) {
            $this->setManipulation('flip', 'vertically');
        }

        // Вращение изображения.
        if (isset($modifications['rotate'])) {
            $this->decodeRotate($modifications['rotate']);
        }

        return $this;
    }

    protected function decodeRotate($angle)
    {
        $angle = (int) $angle;

        if ($angle < 0) {
            $angle = abs($angle);
        }
        else {
            $angle = 360 - $angle;
        }

        $this->setManipulation('orientation', $angle);
    }



    public function setManipulations(array $manipulations = [])
    {
        foreach ($manipulations as $name => $arguments) {
            $this->setManipulation($name, $arguments);
        }

        return $this;
    }

    public function setManipulation($name, $arguments)
    {
        if (! method_exists($this->manipulations, $name)) {
            throw new \Exception("Manipulation `{$name}` does not exist");
        }

        if (is_array($arguments)) {
            $this->manipulations->$name(...$arguments);
        }
        else {
            $this->manipulations->$name($arguments);
        }

        return $this;
    }

    public function save()
    {
        $this->image->manipulate($this->manipulations);
        $this->image->save();

        return $this;
    }
}