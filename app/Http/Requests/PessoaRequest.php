<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PessoaRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'escola' => 'required|min:3',
            'nome' => 'required|min:3',
            'tema' => 'required|min:3',
            'data' => 'required|min:3',
            'hora' => 'required|min:3',

        
        ];
    }

    public function message ()
    {
        
    }
}
