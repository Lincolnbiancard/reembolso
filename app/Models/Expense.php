<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{

    // //Evita do eloquent inserir os campos (`updated_at`, `created_at`) por default
     public $timestamps = false; 

    public function historic($client, $value, $receipt) {
        $historic = auth()->userhistorics()->create([
            'type'          => 'I',
            'cliente'       => $client,
            'valor'         => $value,
            'comprovante'   => $receipt,
            'date'          => date('Ymd')
         ]);
    }

}
