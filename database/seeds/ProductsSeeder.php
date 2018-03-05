<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    private $data = [
        [
            'code' => 'taburet',
            'quantity' => 1,
            'is_new' => true,

            'i18' => [
                'ru' => [
                    'title' => 'Табурет',
                    'description' => '<p>Стул без спинки под кодовым названием "Табурет"</p>',
                    'meta_title' => 'Табурет',
                    'meta_description' => 'Стул без спинки под кодовым названием "Табурет"',
                ]
            ]
        ],
        [
            'code' => 'stul',
            'quantity' => 1,
            'is_popular' => true,

            'i18' => [
                'ru' => [
                    'title' => 'Стул обыкновенный',
                    'description' => '<p>Стул обыкновенный, больше сказать нечего.</p>',
                    'meta_title' => 'Стул обыкновенный',
                    'meta_description' => 'Стул обыкновенный, больше сказать нечего.',
                ]
            ]
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Seeding Products\r\n";

        $productsTable = DB::table(Config::get('migrations.Products'));
        $productsI18Table = DB::table(Config::get('migrations.ProductsI18'));

        foreach ($this->data as $product) {
            $translations = $product['i18'];
            unset($product['i18']);

            $product['created_at'] = Carbon\Carbon::now()->toDateTimeString();
            $product['updated_at'] = Carbon\Carbon::now()->toDateTimeString();

            $id = $productsTable->insertGetId($product);

            foreach ($translations as $languageCode => $productI18) {
                $productI18['product_id'] = $id;
                $productI18['language_code'] = $languageCode;

                $productsI18Table->insert($productI18);
            }
        }
    }
}