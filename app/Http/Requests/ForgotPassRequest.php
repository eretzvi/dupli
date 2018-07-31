<?php

namespace App\Http\Requests;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class ForgotPassRequest extends FormRequest {

    public function authorize() {
        return true;
    }
       public function rules() {
        $this->sanitize();
        return [
          'email' => 'required|email',
      
         ];
    }
     public function sanitize()
    {
        $input = $this->all();
        $input['email'] = filter_var(filter_var($input['email'], FILTER_SANITIZE_EMAIL),FILTER_SANITIZE_STRING);
}

}

