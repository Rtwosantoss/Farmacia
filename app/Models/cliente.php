<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = "cliente";
    public $timestamps = false;
    protected $fillable =
    [
        'id',
        'nome',
        'cpf',
        'endereco',
        'telefone',
        'email',

    ];
}
