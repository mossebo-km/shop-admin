<?php

namespace App\Models\Shop\Sale;

use MosseboShopCore\Models\Shop\Sale\Sale as BaseSale;
use App\Support\Traits\Models\RequestSaver;
use App\Models\Shop\Price\Price;

class Sale extends BaseSale
{
    use RequestSaver;

    protected $needsToSaveFromRequest = [
        'prices',
    ];

    protected function _savePrices(array $pricesData = [])
    {
        // todo: Может быть не только товар
        $product = $this->item()->first();

        if ($product) {
            $prices = $product->prices();

            foreach ($pricesData as $priceTypeId => $pricesByCurrencies) {
                $prices->where('price_type_id', $priceTypeId)->delete();

                foreach ($pricesByCurrencies as $currencyCode => $value) {
                    $prices->save(new Price($pricesToSave[] = [
                        'price_type_id' => $priceTypeId,
                        'currency_code' => $currencyCode,
                        'value'         => $value,
                    ]));
                }
            }
        }
    }
}
