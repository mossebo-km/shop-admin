<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    private $data = [
        [
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
        ],
        [
            'quantity' => 1,
            'is_popular' => true,
            'is_new' => true,

            'i18' => [
                'ru' => [
                    'title' => 'Стол необыкновенный',
                    'description' => '<p>Стол обыкновенный, больше сказать нечего.</p>',
                    'meta_title' => 'Стол необыкновенный',
                    'meta_description' => 'Стол необыкновенный, больше сказать нечего.',
                ]
            ]
        ],
        [
            'quantity' => 1,
            'is_popular' => false,
            'is_new' => false,

            'i18' => [
                'ru' => [
                    'title' => 'Лампа',
                    'description' => '<p>Лампа электрическая.</p>',
                    'meta_title' => 'Лампа электрическая',
                    'meta_description' => 'Лампа электрическая.',
                ]
            ]
        ],
        [
            'quantity' => 1,
            'is_popular' => true,

            'i18' => [
                'ru' => [
                    'title' => 'Ваза китайская',
                    'description' => '<p>Ваза китайская времен династии Си Цзиньпиня.</p>',
                    'meta_title' => 'Ваза китайская',
                    'meta_description' => 'Ваза китайская времен династии Си Цзиньпиня.',
                ]
            ]
        ],
        [
            'quantity' => 1,
            'is_popular' => false,

            'i18' => [
                'ru' => [
                    'title' => 'Шкаф',
                    'description' => '<p>Шкаф для одежды.</p>',
                    'meta_title' => 'Шкаф',
                    'meta_description' => 'Шкаф для одежды.',
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
//         echo "Seeding Products\r\n";
//
//         $productsTable = DB::table(Config::get('migrations.Products'));
//         $productsI18Table = DB::table(Config::get('migrations.ProductsI18'));
//
//         for ($i = 1; $i < 11; $i++) {
//             foreach ($this->data as $product) {
//                 $translations = $product['i18'];
//                 unset($product['i18']);
//
//                 $product['created_at'] = Carbon\Carbon::now()->toDateTimeString();
//                 $product['updated_at'] = Carbon\Carbon::now()->toDateTimeString();
//
//                 $id = $productsTable->insertGetId($product);
//
//                 foreach ($translations as $languageCode => $productI18) {
//                     $productI18['title'] .= " №$i";
//                     $productI18['product_id'] = $id;
//                     $productI18['language_code'] = $languageCode;
//
//                     $productsI18Table->insert($productI18);
//                 }
//             }
//         }
    }
}