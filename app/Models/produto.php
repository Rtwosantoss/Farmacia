<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $table = "produto";
    public $timestamps = false;
    protected $fillable =
    [
        'id',
        'nomeProduto',
        'descricaoProduto',
        'idCategoria',
        'idFornecedor',
        'precoProduto',

    ];
}
