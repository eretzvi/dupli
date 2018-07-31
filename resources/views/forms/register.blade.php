@extends('master')
@section('content')
 
<div class="container">

    
        <div class='row'>
        <div class="col-md-6">
            <form name="" action="https://randomuser.me/api" method="GET">
                
            </form>
        </div>
                <div class="col-md-6"> 
        


                    <form name='register' action="" method="POST" autocomplete="off">
        
            {{ csrf_field() }}
      <div class="form-group">
      <label for="InputLName">* Name : </label>
       <input value="{{ Input::old('name') }}" type="text" name="name" class="form-control" id="InputLName" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="InputEmail">* Email :</label>
                <input value="{{ Input::old('email') }}" type="email"   name="email" class="form-control" id="InputEmail" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="InputPassword">* Password :</label>
                <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
            </div>
             <div class="form-group">
        <label for="InputPasswordConf">* Confirm password :</label>
        <input type="password" name="password_confirmation" class="form-control" id="InputPasswordConf" placeholder="Confirm password">
       <span class="registrationFormAlert" id="checkPasswordMatch"></span>
      </div>
          </div> 
          <div class="form-group">

                 
                      <input id='regsub' type="submit" name="submit" value="Register" class="btn btn-success">
      <input type="reset" name="clear" value="Clear Form" class="btn btn-default" onclick="location.reload()">
              
      </div>

 
        </form>
            
            
            
            
           
    </div>
 

@endsection