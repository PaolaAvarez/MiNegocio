<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGastoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tipo'=>'string|required|max:50', 
            'monto'=>'required',
            'user_id'=>'integer|required|exists:App\User,id',
        ];
    }
    public function messages()
    {
        return[
            'tipo.required'=>'Este campo es requerido',
            'tipo.string'=>'El valor no es correcto',
            'tipo.max'=>'Solo se permite 50 caracteres',

            'monto.required'=>'Este campo es requerido',
            
            'user_id.required'=>'Este campo es requerido',
            'user_id.integer'=>'El valor tiene que ser entero',
            'user_id.exists'=>'La marca no existe',
        ];
    }
}
