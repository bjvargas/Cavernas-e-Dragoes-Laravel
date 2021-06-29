<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListaEquipamentoRequest extends FormRequest
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
            'equipamento_id'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'equipamento_id.required'=> 'Aventureriro, preencha o nome do Equipamento',
        ];
    }
}