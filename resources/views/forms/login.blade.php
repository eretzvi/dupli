@extends('master')

@section('content')


<p> Please login to your account </p>
              
                    <form class="form-horizontal" action="" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label col-md-4" for="InputEmail">Email:</label>      <div class="col-md-6">
                   <input value="{{ Input::old('email') }}" type="text" name="email" class="form-control" id="InputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-4" for="InputPassword">Password:</label>     <div class="col-md-6">
<input type="password" name="password" class="form-control" id="InputPassword" placeholder="Password">
                        </div>
                        </div>
                        <div class="row">
                        <div class='col-md-2 col-md-offset-4'>
                            <input type="submit" name="submit" value="Login" class="btn btn-primary">
                        </div>
                       
                    </div>
                    </form>
                </div>

                <div class='row'>

                    <div class='col-md-6 col-md-offset-4 '>
                        <a href="{{url('user/password')}}"> Forgot password?</a>
                    </div>
                    
                </div>
                <br>
            </div>
            @endsection