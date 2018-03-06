<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

class Currency extends Model
{
    protected $fillable = [
        'code', 'name', 'symbol', 'precision', 'thousand_separator', 'decimal_separator', 'swap_currency_symbol'
    ];

    public function __construct(Array $attr = [])
    {
        parent::__construct($attr);

        $this->table = \Config::get('migrations.Currencies');
    }

    public function prices()
    {
        return $this->hasMany(Price::class, 'currency_code', 'code');
    }

    public static function cached($currencyCode)
    {
        if (! ($result = Redis::get("currency:$currencyCode"))) {
            $currencies = self::get();

            Redis::pipeline(function ($pipe) use ($table) {
                foreach ($currencies as $key => $currency) {
                    $pipe->set("currency:{$currencies->code}", $currency);

                    if ($currency->code == $currencyCode) {
                        $result = $currency;
                    }
                }
            });
        }

        return $result;
    }
}