<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
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
            'modelo'=>'string|required|unique:productos,modelo,'.$this->route('marca')->id.'|max:50', 
            'detalle'=>'nullable|string|max:250',
            'tipo'=>'required|string|max:250',
            'marca_id'=>'integer|required|exists:App\Marca,id',
        ];
    }
    public function messages()
    {
        return[
            'modelo.required'=>'Este campo es requerido',
            'modelo.string'=>'El valor no es correcto',
            'modelo.max'=>'Solo se permite 50 caracteres',
            'detalle.string'=>'El valor no es correcto',
            'detalle.max'=>'Solo se permite 250 caracteres',
            'tipo.required'=>'Este campo es requerido',
            'tipo.string'=>'El valor no es correcto',
            'tipo.max'=>'Solo se permite 250 caracteres',
            'marca_id.required'=>'Este campo es requerido',
            'marca_id.integer'=>'El valor tiene que ser entero',
            'marca_id.exists'=>'La marca no existe',
        ];
    }
}
