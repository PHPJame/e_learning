<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'status_id' => '1',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'teacher',
                'email' => 'teacher@gmail.com',
                'status_id' => '2',
                'password' => bcrypt('1234')
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'status_id' => '3',
                'password' => bcrypt('1234')
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}