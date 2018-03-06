<?php

use Illuminate\Database\Seeder;

class PriceTypesSeeder extends Seeder
{
    private $data = [
        [
            "name" => "old-price",
            "description" => "Старая цена"
        ],
        [
            "name" => "retail-price",
            "description" => "Розничная цена"
        ],
        [
            "name" => "franchisee-price",
            "description" => "Цена для франчайзеров"
        ],
        [
            "name" => "purchase-price",
            "description" => "Закупочная цена"
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