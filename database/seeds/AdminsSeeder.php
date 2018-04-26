<?php

use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    private $data = [
        [
            'role_id' => 1,
            'name' => 'SuperAdmin',
            'email' => 'asd2ya7asJgat65hva@mossebo.ru',
            'password' => 'Juyiayu26ahVUat1nkx;ap1'
        ],
        [
            'role_id' => 2,
            'name' => 'Владислав',
            'email' => 'code@mossebo.ru',
            'password' => 'XFx7pCp4GRWB'
        ],
        [
            'role_id' => 2,
            'name' => 'Юрий',
            'email' => 'code2@mossebo.ru',
            'password' => 'bnHy28s1Laz&3l'
        ],
        [
            'role_id' => 3,
            'name' => 'Диана Шамонова',
            'email' => 'product@mossebo.market',
            'password' => '731256'
        ],
        [
            'role_id' => 3,
            'name' => 'Мария Нестерова',
            'email' => 'product8@mossebo.market',
            'password' => 'ua6%1jaD'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Seeding Admins\r\n";

        foreach ($this->data as $row) {
            \App\Models\Admin::create([
                'name' => $row['name'],
                'role_id' => $row['role_id'],
                'email' => $row['email'],
                'password' => \Hash::make($row['password']),
                'api_token' => str_random(60)
            ]);
        }
    }
}
