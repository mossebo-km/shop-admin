<?php

use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    private $data = [
        [
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.ru',
            'password' => '$2y$10$0maXzm.DSCN8G99R6KGb8eLokqD2rR6b0NfuMtO.7q/PxwoOqZbK2'
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Seeding Admins\r\n";

        $table = DB::table(Config::get('migrations.Admins'));

        foreach ($this->data as $row) {
            $row['created_at'] = Carbon\Carbon::now()->toDateTimeString();
            $row['updated_at'] = Carbon\Carbon::now()->toDateTimeString();
            $row['api_token'] = str_random(60);

            $table->insert($row);
        }
    }
}
