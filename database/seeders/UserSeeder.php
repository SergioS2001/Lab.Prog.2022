<?php

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
      //  User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [

            [
                'name' => 'Sérgio Admin',
                'email' => 'sergio@gmail.com',
                'password' => 'teste123456',
                'isAdmin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Joana',
                'email' => 'joana@gmail.com',
                'password' => 'teste123456',
                'isAdmin' => '1',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Ines',
                'email' => 'ines@gmail.com',
                'password' => 'teste123456',
                'isAdmin' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

            User::insert($users);
    }
}