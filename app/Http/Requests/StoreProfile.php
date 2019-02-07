<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfile extends FormRequest
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
            'adresse'=>'required|max:255|min:1',
            'ville'=>'required|max:255|min:1',
            'cp'=>'required|max:100|min:1',
            'np'=>'required|max:10|min:1',
            'gsm'=>'required|max:30|min:1',
            'gsm2'=>'required|max:30|min:1',
            'fixe'=>'required|max:30|min:1',
        ];
    }
}
