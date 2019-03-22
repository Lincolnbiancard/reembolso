<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
    protected $table = 'formularios';
    // //Evita do eloquent inserir os campos (`updated_at`, `created_at`) por default
     public $timestamps = false; 

    protected $fillable = [ //Atributos que podem ser preenchidos por formulario
        'id', 'cliente', 'valor', 'motivo', 'comprovante', 'despesa_id', 'user_id'
    ];

    public function despesas()
    {
        return $this->belongsTo('App\Despesa', 'despesa_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    
}
