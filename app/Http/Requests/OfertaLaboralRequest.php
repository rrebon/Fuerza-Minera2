<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfertaLaboralRequest extends FormRequest
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
        		'titulo' => 'required|min:5|max:50',
        		'texto' => 'required|min:50|max:500',
        		'intro' => 'required|min:15|max:60',
        		'fechaAlta' => 'required|date_format:"d/m/Y"',
        		'urlArchivo' => 'file',
        ];
    }
}
