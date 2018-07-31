<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use DB;
use Hash;
use Session;
use Reminder;
 

 class User extends Model{
    static public function byEmail($email) {
        $email = self::where('email',$email)->first();
        return $email;
    }
    static public function validateUser($email, $password) {
        $valid = false;
        $sql = "SELECT * FROM users u "
              . "JOIN user_roles r ON u.id = r.user_id "
              . "WHERE u.email = ?";
        $result = DB::select($sql, [$email]);      

        if ($result) {
            $data['userexists'] = $result;
            
            $result = $result[0];

            if (Hash::check($password, $result->password)) {

                $valid = true;
                session(['user_id'=> $result->id]);
                session(['user_name'=> $result->name]);
                session(['user_email'=>$result->id]);
                session(['user_pass' => $result->password]);
          
                 if ($result->role == 42) {

                    session(['is_admin' => true]);
                }
                 Session::flash('sm', 'Welcome back ' . $result->name);
            }
        }
        return $valid;
    }

    static public function saveUser($request) {
        $user = new self();
        if (isset($request->id)) {
            $user->id = $request->id;
        }
        else{
            $user->id = rand(1,999)*20;
        }
        $user->name = $request->name;
        $users = User::all()->toArray();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        $uid = $user->id;
        $sql = "INSERT INTO user_roles VALUES($uid, 13)";
        DB::insert($sql);
        Session::flash('sm', $request->name. ' thank you for registering, you may now login to your account.');
    }
   
    static public function updateUser($request, $id) {
        $user = self::find($id);
        $user->name = $request['name'];
        if ($request['email'] !== $user->email){
            $user->email = $request['email'];    
        }
        $user->update();
        $uid = $user->id;
        $sql = "UPDATE user_roles SET role = 42";
        DB::update($sql);
        Session::flash('sm', 'User has been updated');
    }  
    
    static public function deleteUser($request, $id) {
        $user = self::find($id);
        $user->delete(); 
   
        Session::flash('sm', 'User has been updated');
    }  
}
