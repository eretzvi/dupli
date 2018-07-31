<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
       public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
        'name' => 'required|min:2|max:70|regex:/^[a-zא-ת]+(\s[a-zא-ת]+)*$/i',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|max:12|confirmed'
      ];
    }

}
