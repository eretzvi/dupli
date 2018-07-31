<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\EditUserRequest;

use App\User;
use Session;

class CmsUserController extends MainController
{  
  function __construct() {
    parent::__construct();
    $this->middleware('validAdmin');
  }

  public function index() {
    
    $json = self::$data['json'] = file_get_contents('./users.json', true);
    self::$data['users'] = User::all();
    // $request = Request::create('https://randomuser.me/api', 'GET');
    return view('cms.users', self::$data);
  }

  public function create() {
    
    return view('cms.add_user', self::$data);
  }

  public function store(UserRequest $request) {
    User::saveUser($request);
    return redirect('cms/users');
  }
  

  public function show($id) {  
    self::$data['title'] = "Delete User";
    self::$data['id'] = $id;
    return view('cms.delete_user', self::$data);
  }

  public function edit($id) {
    self::$data['title'] = "Edit User";
    self::$data['user'] = User::find($id);
    self::$data['email'] = self::$data['user']['email'];
    return view('cms.edit_user', self::$data);
  }

  public function update(EditUserRequest $request, $id) {
    $users = self::$data['users'] = User::all();
    if (User::where('email', '=', $request['user'])->exists()) {
      return view('cms.edit_user', self::$data);
    }
    else{
      User::updateUser($request, $id);
      Session::flash('sm', 'user has been upDated');
      return redirect('cms/users');
    }
  }

  public function destroy($id) {
    User::destroy($id);
    Session::flash('sm', 'user has been deleted');
    return redirect('cms/users');
  }

}
