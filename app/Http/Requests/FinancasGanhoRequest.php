<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinancasGanhoRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'fonte' => 'required|max:255',
            'ganho' => 'required',
            'data' => 'required',
        ];
    }

    public function messages()
    {
        return [
          'fonte' => 'O campo origem é obrigatório',
          'ganho' => 'O campo valor é obrigatório',
          'data' =>  'O campo recebimento é obrigatório',
        ];
    }

}
