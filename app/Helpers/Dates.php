<?php

if (!function_exists('dateFormatFull')) {
    function dateFormatFull(Carbon\Carbon $date): string
    {
        return $date->format('d-m-Y H:i:s');
    }
}

