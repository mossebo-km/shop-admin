<?php

namespace App\Models\Shop\Product;

use MosseboShopCore\Models\Shop\Product\ProductSale as BaseProductSale;
use App\Support\Traits\Models\RequestSaver;
use App\Models\Shop\Price\Price;

class ProductSale extends BaseProductSale
{
    use RequestSaver;

    protected $needsToSaveFromRequest = [
        'prices',
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    protected function _savePrices(array $pricesData = [])
    {
        $product = $this->product()->first();

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
