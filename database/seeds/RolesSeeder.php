<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    private $data = [
        [
            'name' => 'SuperAdmin',
            'description' => '',
        ],
        [
            'name' => 'Admin',
            'description' => '',
        ],
        [
            'name' => 'Manager',
            'description' => '',
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Seeding Roles\r\n";

        $table = DB::table(Config::get('migrations.Roles'));

        foreach ($this->data as $row) {
            $row['created_at'] = Carbon\Carbon::now()->toDateTimeString();
            $row['updated_at'] = Carbon\Carbon::now()->toDateTimeString();

            $table->insert($row);
        }
    }
}
