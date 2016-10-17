<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitacionRequest extends FormRequest
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
            'precio' => 'required',
            'estado' => 'min:3|required',
            'descripcion' => 'required',
            'user_id' => 'required',
            'direccion' => 'min:6|required',
            'ciudad' => 'required' 
        ];
    }
}
