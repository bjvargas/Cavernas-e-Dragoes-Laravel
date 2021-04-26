<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipamentoRequest extends FormRequest
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
           'nome'=>'required',
           'tipo'=>'required',
           'preco'=>'required|numeric',
           'ca'=>'required|numeric',
           'forca'=>'required',
           'peso'=>'required',
           'dano'=>'required',
           'propriedade'=>'required',
           'descricao'=>'required'

        ];
    }

    public function messages()
    {
        return [
            'nome.required'=> 'Preencha o nome do Equipamento!',
            'tipo.required'=> 'Preencha o tipo de Equipamento!',
            'descricao.required'=> 'Preencha a descrição do Equipamento!',
            
        ];
       
    }
}
