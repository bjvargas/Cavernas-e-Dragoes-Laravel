<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonagemRequest extends FormRequest
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
           'raca'=>'required',
           'id_classe'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required'=> 'Aventureriro, preencha o nome do seu personagem',
        ];
    }
}
