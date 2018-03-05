<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::transaction(function() {
            $this->call([
                CurrenciesSeeder::class,
                LanguagesSeeder::class,

                CategoriesSeeder::class,

                ProductsSeeder::class,

                CategoryProductsSeeder::class,

                PriceTypesSeeder::class,

                PricesSeeder::class,
            ]);
        });
    }
}


