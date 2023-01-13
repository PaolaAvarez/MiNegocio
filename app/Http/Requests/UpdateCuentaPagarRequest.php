<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCuentaPagarRequest extends FormRequest
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
            'codigo'=>'string|required|max:50', 
            'entidad'=>'string|required|max:50',
            'fecha'=>'required',
            'monto'=>'required',
            'user_id'=>'integer|required|exists:App\User,id',
        ];
    }
    public function messages()
    {
        return[
            'codigo.required'=>'Este campo es requerido',
            'codigo.string'=>'El valor no es correcto',
            'codigo.max'=>'Solo se permite 50 caracteres',

            'entidad.required'=>'Este campo es requerido',
            'entidad.string'=>'El valor no es correcto',
            'entidad.max'=>'Solo se permite 50 caracteres',

            'fecha.required'=>'Este campo es requerido',

            'monto.required'=>'Este campo es requerido',
            
            'user_id.required'=>'Este campo es requerido',
            'user_id.integer'=>'El valor tiene que ser entero',
            'user_id.exists'=>'La marca no existe',
        ];
    }
}