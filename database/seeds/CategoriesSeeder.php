<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    private $data = [
        [
            'parent_id' => 0,
            'slug' => 'chairs',
            'enabled' => true,
            'position' => 0,

            'i18' => [
                'ru' => [
                    'title' => 'Стулья',
                    'description' => '<p>Замечательные стулья на любой вкус.</p>',
                    'meta_title' => 'Стулья',
                    'meta_description' => 'Замечательные стулья на любой вкус.',
                ]
            ]
        ],
        [
            'parent_id' => 1,
            'slug' => 'tables',
            'enabled' => true,
            'position' => 1,

            'i18' => [
                'ru' => [
                    'title' => 'Столы',
                    'description' => '<p>Замечательные столы на любой вкус.</p>',
                    'meta_title' => 'Столы',
                    'meta_description' => 'Замечательные столы на любой вкус.',
                ]
            ]
        ],
        [
            'parent_id' => 0,
            'slug' => 'lights',
            'enabled' => true,
            'position' => 2,

            'i18' => [
                'ru' => [
                    'title' => 'Свет',
                    'description' => '<p>Замечательные лампы, торшеры и светильники на любой вкус.</p>',
                    'meta_title' => 'Свет',
                    'meta_description' => 'Замечательные лампы, торшеры и светильники на любой вкус.',
                ]
            ]
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Seeding Categories\r\n";

        $categoriesTable = DB::table(Config::get('migrations.Categories'));
        $categoriesI18Table = DB::table(Config::get('migrations.CategoriesI18'));

        foreach ($this->data as $category) {
            $translations = $category['i18'];
            unset($category['i18']);

            $category['created_at'] = Carbon\Carbon::now()->toDateTimeString();
            $category['updated_at'] = Carbon\Carbon::now()->toDateTimeString();

            $id = $categoriesTable->insertGetId($category);

            foreach ($translations as $languageCode => $categoryI18) {
                $categoryI18['category_id'] = $id;
                $categoryI18['language_code'] = $languageCode;

                $categoriesI18Table->insert($categoryI18);
            }
        }
    }
}