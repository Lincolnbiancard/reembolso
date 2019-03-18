<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesas extends Model
{

    // //Evita do eloquent inserir os campos (`updated_at`, `created_at`) por default
    public $timestamps = false; 

    protected $fillable = [ //Atributos que podem ser preenchidos por formulario
        'tipos'
    ];
}
