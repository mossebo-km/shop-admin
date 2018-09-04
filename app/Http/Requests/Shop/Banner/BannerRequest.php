<?php

namespace App\Http\Requests\Shop\Banner;

use App\Http\Requests\ApiRequest;
use Illuminate\Validation\Rule;
use BannerPlaces;

class BannerRequest extends ApiRequest
{
    protected $model = \App\Models\Shop\Banner\Banner::class;
    protected $permissionsNamespace = 'shop.banners';


    protected function getEntityRules()
    {
        $bannerPlaces = BannerPlaces::getCollection();
        $bannerPlaces = array_column($bannerPlaces->toArray(), 'id');

        $rules = [
            'title_color'      => 'required|max:255',
            'caption_color'    => 'nullable|max:255',
            'button_color'     => 'nullable|max:255',
            'button_background_color' => 'nullable|max:255',
            'mobile_image'     => 'nullable|max:255',
            'desktop_image'    => 'nullable|max:255',
            'background_image' => 'nullable|max:255',
            'small_image'      => 'nullable|max:255',
            'enabled'          => 'boolean',

            'gradient.color_from' => 'nullable|max:255',
            'gradient.color_to'   => 'nullable|max:255',
            'gradient.type'       => 'nullable|in:linear,radial',
            'gradient.angle'      => 'nullable|numeric|min:0|max:360',
        ];

        $places = $this->input('places');

        if ($places) {
            $rules['places'] = function($attribute, $value, $fail) use($places, $bannerPlaces) {
                foreach ($places as $placeId) {
                    if (! in_array($placeId, $bannerPlaces)) {
                        return $fail(trans("validation.banner.places.exists", ['place' => $placeId]));
                    }
                }
            };
        }

        foreach (\Languages::enabled() as $language) {
            $rules["i18n.{$language['code']}"]         = "required|array";
            $rules["i18n.{$language['code']}.title"]   = 'bail|required|max:255';
            $rules["i18n.{$language['code']}.caption"] = 'bail|required|max:255';
            $rules["i18n.{$language['code']}.button"]  = 'bail|required|max:255';
            $rules["i18n.{$language['code']}.link"]    = 'bail|required|max:255';
        }

        return $rules;
    }
}

