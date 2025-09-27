<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedras extends Model
{
    protected $fillable =
    [
        'nome',
        'imagem',
        'descricao'
    ];
}
