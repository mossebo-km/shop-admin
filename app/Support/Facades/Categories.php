<?php

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * Class Categories
 * @package App\Support\Facades
 */
class Categories extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'categories';
    }
}