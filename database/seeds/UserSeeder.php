<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'email' => 'sadmin@gmail.com',
                'username' => 'sadmin',
                'password' => bcrypt('1234'),
                'role' => 0,
            ]
        ];

        User::insert($data);
    }
}
