<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table = "categoria";
    public $timestamps = false;
    protected $fillable =
    [
        'id',
        'nome'

    ];
}
