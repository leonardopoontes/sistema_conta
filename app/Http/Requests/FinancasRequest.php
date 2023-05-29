<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinancasRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'origem' => 'required|max:255',
            'valor' => 'required',
            'data' => 'required|date',
            'descricao' => 'required|max:255',
            'vencimento' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'origem.required' => 'O campo é obrigatório',
            'valor.required' => 'O campo é obrigatório',
            'data.required' => 'Esse campo é obrigatório',
            'descricao.required' => 'O campo é obrigatório',
            'vencimento.required' => 'O campo é obrigatório',

        ];
    }
}
