<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

         //chamada para correr o seeder dos utilizadores 
        $this->call([UserTableSeeder::class]);

        $this->call([ArtigosTableSeeder::class]);

        //criar 10 utilizadores com info aleatoria
        \App\Models\User::factory(10)->create();
}

    } 
