<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\StoreUser;

class StoreUser extends FormRequest
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
        $id=$this->route('user')->id;
        return [
            
            'name' =>'required|max:30|min:3',
            'firstname'=>'required|max:30|min:3',
            'email'=>'required|email|unique:users,email,'.$id.'id',
            'password'=>'required|max:15|min:5'
        ];
    }
}
