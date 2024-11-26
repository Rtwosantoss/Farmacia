<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    protected $table = "fornecedor";
    public $timestamps = false;
    protected $fillable =
    [
        'id',
        'nomeFornecedor',
        'cnpj',
        'endereco',
        'telefone'

    ];
}
