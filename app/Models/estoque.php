<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class estoque extends Model
{
    protected $table = "estoque";
    public $timestamps = false;
    protected $fillable =
    [
        'id',
        'produto_id',
        'quantidade'
    ];
}
