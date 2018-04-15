<?php

use Illuminate\Database\Seeder;

class PriceTypesSeeder extends Seeder
{
    private $data = [
        [
            "name" => "old-price",
            "title" => "Старая цена",
            "description" => "",
            "enabled" => true,
            "position" => 3
        ],
        [
            "name" => "retail-price",
            "title" => "Розничная цена",
            "description" => "",
            "enabled" => true,
            "position" => 0
        ],
        [
            "name" => "franchisee-price",
            "title" => "Цена для франчайзери",
            "description" => "",
            "enabled" => true,
            "position" => 2
        ],
        [
            "name" => "purchase-price",
            "title" => "Закупочная цена",
            "description" => "",
            "enabled" => true,
            "position" => 1
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Seeding PriceTypes\r\n";

        $priceTypesTable = DB::table(Config::get('migrations.PriceTypes'));

        foreach ($this->data as $row) {
            $row['created_at'] = Carbon\Carbon::now()->toDateTimeString();
            $row['updated_at'] = Carbon\Carbon::now()->toDateTimeString();

            $priceTypesTable->insert($row);
        }
    }
}