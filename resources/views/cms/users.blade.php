@extends('cms.master')

@section('cms_content')


<div class="row text-center">
    <h2>Users</h2><hr>
    <div class="col-md-4 ">

    </div>
</div>
 <p class="unsortable add-menu"> <a class="unsortable btn btn-success" href="{{ url('cms/users/create') }}"><i class="  add fa fa-plus"></i> Add a new user</a></p>
  <br>
  <table class="table">
    <tr class="small">
      <th>User Name</th>
      <th>User Email</th>
      <th>User Password</th>
      <th>Operations</th>
    </tr>
    
    @foreach($users as $row)
    <tr class="text-center list">
        <td><b>{{ $row['name'] }}</b></td>
        <td><b>{{ $row['email'] }}</b></td>
        <td><i>{{ $row['password'] }}</i></td>
      <td>
        <a href="{{ url('cms/users/' . $row['id'] . '/edit') }}">Edit</a> | 
        <a href="{{ url('cms/users/' . $row['id']) }}">Delete</a>
      </td>
    </tr>
    @endforeach
  </table>
@endsection
 