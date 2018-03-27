<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'data_nascimento' => 'required',
            'numero' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'cep' => 'required',
        ];
    }

    /*
    * Validações de errors
    */
     public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório!',
            'data_nascimento.required' => 'O campo Data de Nascimento é obrigatório!',
            'numero.required' => 'O campo Número é obrigatório!',
            'logradouro.required' => 'O campo Logradouro é obrigatório!',
            'bairro.required' => 'O campo bairro é obrigatório!',
            'cep.required' => 'O campo cep é obrigatório!',

        ];
    }
}
