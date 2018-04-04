<?php

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Currencies
 * @package App\Support\Facades
 */
class Currencies extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'currencies';
    }
}