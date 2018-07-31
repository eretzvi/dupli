@extends('cms.master')

@section('cms_content')
  <h2 class="page-header">Edit this user</h2>
  <div class="col-md-12">
    <form action="{{ url('cms/users/' . $user['id']) }}" method="post">    
              <input type="hidden" name="_method" value="PUT">
`
        {{ csrf_field() }}

      <div class="form-group col-md-4 col-md-offset-2">
          <label for="Input Name"> Name:</label>
        <input value="{{ $user['name'] }}" type="text" name="name" class="form-control original-text-field" id="Inputname" placeholder="name">
      </div> 
      <div class="form-group  col-md-3">
        <label for="InputEmail">Email:</label>
        <input value="{{$email }}" type="text" name="email" class="form-control original-text-field" id="InputEmail" placeholder="User Email">
      </div>
     

      <div class="row col-md-3">
      <input type="submit" name="submit" value="Save user" class="btn btn-primary">
      <a href="{{ url('cms/users') }}" class="btn btn-default">Cancel</a>
      </div>
    </form>
 @endsection