<?php

namespace Database\Factories;

use App\Models\Artigo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artigo>
 */
class ArtigoFactory extends Factory
{
    protected $model = Artigo::class;

    public function definition()
    {
        return [
            //    'nome' => Arr::random(array(" 1", "Marca 2", "Marca 3", "Marca 4", "Marca 5", "Marca 6")),
            'tipo' => Arr::random(array("Chapeu", "Acessorio", "Casaco", "Camisa", "calca", "roupa-interior")),
            'marca' => Arr::random(array("Marca 1", "Marca 2", "Marca 3", "Marca 4", "Marca 5", "Marca 6")),
            'sexo' => Arr::random(array("M", "F")),
            'tamanho' => Arr::random(array("XS", "S", "M", "L", "XL")),
            'artigo_id' => Artigo::all()->random()->id,
        ];
    }
}
