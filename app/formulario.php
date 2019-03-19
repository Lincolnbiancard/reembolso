<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'formularios';
    // //Evita do eloquent inserir os campos (`updated_at`, `created_at`) por default
     public $timestamps = false; 

    protected $fillable = [ //Atributos que podem ser preenchidos por formulario
        'cliente', 'valor', 'motivo', 'comprovante', 'despesa_id'
    ];

    public function despesas()
    {
        return $this->belongsTo('App\Despesa', 'despesa_id', 'id');
    }
}
