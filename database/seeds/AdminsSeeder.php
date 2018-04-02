<?php

use Illuminate\Database\Seeder;

class AdminsSeeder extends Seeder
{
    private $data = [
        [
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@admin.ru',
            'password' => 'h&62g1rvK'
        ],
        [
            'role_id' => 2,
            'name' => 'Диана Шамонова',
            'email' => 'product@mossebo.market',
            'password' => '7km&Yt2h'
        ],
        [
            'role_id' => 2,
            'name' => 'Екатерина Кожевникова',
            'email' => 'product7@mossebo.market',
            'password' => 'js7G2t;0'
        ],
        [
            'role_id' => 2,
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
                'email' => $row['email'],
                'password' => \Hash::make($row['password']),
                'api_token' => str_random(60)
            ]);
        }
    }
}
