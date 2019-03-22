<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidator extends FormRequest
{
    // Verificar nvl de acesso 
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'valor' => 'required|numeric',
        ];
    }
}
