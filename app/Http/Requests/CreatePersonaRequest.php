<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonaRequest extends FormRequest
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
            'cPerApellido'=>'required',
            'cPerNombre'=>'required',
            'cPerDireccion'=>'required',
            'dPerFecNac'=>'required',
            'nPerEdad'=>'required',
            'nPerSueldo'=>'required',
            'nPerEstado'=>'required',
        ];
    }

    public function messages(){
        return[
            'cPerApellido.required'=>'Ingrese el Apellido',
            'cPerNombre.required'=>'Ingrese el Nombre',
            'cPerDireccion.required'=>'Ingrese la Dirección',
            'dPerFecNac.required'=>'Ingrese la Fecha de Nacimiento',
            'nPerEdad.required'=>'Ingrese la Edad',
            'nPerSueldo.required'=>'Ingrese el Sueldo',
            'nPerEstado.required'=>'Seleccione Estado'
        ];
    }
}
