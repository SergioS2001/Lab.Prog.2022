<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'marca',
        'tamanho',
        'sexo',
    ];

    public function artigos()
    {
        return $this->hasMany(Artigo::class, 'artigo_id', 'id');
    }
}
