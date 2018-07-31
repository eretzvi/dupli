<?php

namespace App\Http\Controllers;
use DB;
use Session;use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\EditUserRequest;

class UserController extends MainController {  
  
  function __construct() {
    parent::__construct();
    self::$data['title'] = 'UserList';


    

   $this->middleware('guest', ['except' => ['getLogout']  ] );
  } 
  
  public function getLogin(){
    self::$data['title'] = 'Login';
    return view('forms.login', self::$data);
  }
  
  public function getRegister(Request $request){
    self::$data['title'] = 'Register';
    return view('forms.register', self::$data);
  }

  
  
  public function getJson(Request $request){
    self::$data['title'] = 'Import JSON object';
    self::$data['jusers'] = [];
    return view('forms.json', self::$data);
  }
    
  public function postJSON(Request $request){

    self::$data['title'] = 'Import users from JSON';
    $jdata = $request['data'];
    $what   = "\\x00-\\x19"; // all whitespace characters except space itself
    $json = trim(preg_replace( "/[".$what."]+/" , '' , $jdata));
    $users =  json_decode($json);
    
    if (count($users) <= 1){
      User::saveUser($request);
      Session::flash('sm', $request->name. ' thank you for registering, you may now login to your account.');
    }

    foreach ($users as $user) {
      if (User::where('email', '=', $user->email)->exists()) {
        return view('forms.json', self::$data)->withErrors('The email : '. $user->email.' exists. Please try again.');
       }
      if (isset($user->id)) {
      self::$data['jusers'][$user->id] = [
        "user_ID" => $user->id,
        "user_name" => $user->name,
        "user_email" => $user->email
      ];
    }
      User::saveUser($user);
    }
    return redirect('/');
    
  }
 
  
  public function postLogin(LoginRequest $request){
    self::$data['title'] = 'Users';

    $redirect = !empty($request['returnTo']) ? $request['returnTo'] : '';
    
    if( User::validateUser($request['email'], $request['password']) ){
      self::$data['title'] = 'Users';
       return redirect( $redirect );
      
    } else {
      
      self::$data['title'] = 'Login page';
      return view('forms.login', self::$data)->withErrors('Wrong email/password combination');
      
    }
    
  }
  
  public function postRegister(RegisterRequest $request){
    self::$data['title'] = 'UserList';

    User::saveUser($request);
    return redirect('user/login');
  }
    public function getLogout(){
        
        Session::flush();
       return redirect('user/login');
    }
 

 
}