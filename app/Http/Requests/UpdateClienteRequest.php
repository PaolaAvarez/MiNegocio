<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClienteRequest extends FormRequest
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
            'nombre'=>'required|string|max:50', 
            'ci'=>'string|required|unique:clientes,ci,'.$this->route('cliente')->id.'|max:50', 
            'celular'=>'required|string|max:10',
            'email'=>'nullable|string|max:250|email:rfc,dns',
        ];
    }
    public function messages()
    {
        return[
            'nombre.required'=>'Este campo es requerido',
            'nombre.string'=>'El valor no es correcto',
            'nombre.max'=>'Solo se permite 50 caracteres',

            'ci.required'=>'Este campo es requerido',
            'ci.string'=>'El valor no es correcto',
            'ci.max'=>'Solo se permite 11 caracteres',

            'celular.required'=>'Este campo es requerido',
            'celular.string'=>'El valor no es correcto',
            'celular.max'=>'Solo se permite 10 caracteres',

            'email.string'=>'El valor no es correcto',
            'email.max'=>'Solo se permite 250 caracteres',
        ];
    }
}
