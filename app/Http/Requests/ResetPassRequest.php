<?php

namespace App\Http\Requests;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class ResetPassRequest extends FormRequest {

    public function authorize() {
        return true;
    }
       public function rules() {
        $this->sanitize();
        return [
            'password' => 'required|min:6|max:12|confirmed',
      
         ];
    }
     public function sanitize()
    {
        $input = $this->all();
        $input['password'] = filter_var($input['password'], FILTER_SANITIZE_STRING);
}

}

