<?php

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Languages
 * @package App\Support\Facades
 */
class Languages extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'languages';
    }
}