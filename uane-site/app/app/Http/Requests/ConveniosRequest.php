<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConveniosRequest extends FormRequest
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
            'campus'                        => 'required',
            'empresa'                       => 'required',
            'giro_empresa'                  => 'required',
            'direccion_empresa'             => 'required',
            'nombre_representante_legal'    => 'required',
            'nombre_contacto'               => 'required',
            'telefono_contacto'             => 'required',
            'correo_contacto'               => 'required',
            'fecha_inicio'                  => 'required',
            'beca_para_bach'                => 'required',
            'beca_para_lic'                 => 'required',
            'beca_para_post'                => 'required',
            'beca_para_bach_linea'          => 'required',
            'beca_para_lic_linea'            => 'required',
            'beca_para_post_linea'          => 'required',
            'documento'                     => 'mimes:doc,pdf,docx,jpg|max:5000|file',
        ];
    }
}
