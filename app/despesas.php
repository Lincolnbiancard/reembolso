<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $table = 'despesas';
    
    //Evita do eloquent inserir os campos (`updated_at`, `created_at`) por default
    public $timestamps = false; 

    protected $fillable = [ //Atributos que podem ser preenchidos por formulario
        'id', 'tipos', 'descricao'
    ];

    public function Formularios() { 
        return $this->hasMany('App\Formulario'); //Despesa pertence a vários Formularios
    }
}
