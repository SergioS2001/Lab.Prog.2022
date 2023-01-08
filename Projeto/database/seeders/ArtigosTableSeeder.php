<?php

namespace Database\Seeders;

use App\Models\Artigo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ArtigosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(){
        $artigos = [
            [
            'tipo' => 'Chapeu',
            'marca' => 'Marca 1',
            'tamanho' => 'M',
            'sexo' => 'M',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'tipo' => 'Camisa',
            'marca' => 'Marca 3',
            'tamanho' => 'XL',
            'sexo' => 'f',
            'created_at' => now(),
            'updated_at' => now(),
        ],

        [
            'tipo' => 'Camisa',
            'marca' => 'Marca 2',
            'tamanho' => 'XL',
            'sexo' => 'F',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'tipo' => 'roupa-interior',
            'marca' => 'Marca 5',
            'tamanho' => 'M',
            'sexo' => 'F',
            'created_at' => now(),
            'updated_at' => now(),
        ],

    ];

        Artigo::insert($artigos);

    }
    
}
