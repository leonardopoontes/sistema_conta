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
            'descricao' => 'required|max:255',
            'vencimento' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'origem.required' => 'O campo origem é obrigatório',
            'valor.required' => 'O campo valor é obrigatório',
            'vencimento.required' => 'Esse campo é obrigatório',
            'descricao.required' => 'O campo descrição é obrigatório',

        ];
    }
}
