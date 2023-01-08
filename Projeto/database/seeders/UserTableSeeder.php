<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  \App\Models\User::factory(10)->create();

        $users = [

            [
                'name' => 'Sérgio Admin',
                'email' => 'sergio@gmail.com',
                'password' => 'teste123456',
                'is_admin' => '1',
                'is_member' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Joana',
                'email' => 'joana@gmail.com',
                'password' => 'teste123456',
                'is_admin' => '1',
                'is_member' => '1',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Ines',
                'email' => 'ines@gmail.com',
                'password' => 'teste123456',
                'is_admin' => '1',
                'is_member' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

            User::insert($users);

    }
}
