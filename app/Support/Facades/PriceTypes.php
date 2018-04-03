<?php

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class PriceTypes
 * @package App\Support\Facades
 */
class PriceTypes extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'price-types';
    }
}