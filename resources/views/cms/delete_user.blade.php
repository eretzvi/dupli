@extends('cms.master')

@section('cms_content')
  <h1 class="page-header">Are you sure you want to delete this user: {{$id}} ? </h1>
  <div class="col-md-6">
    <form action="{{ url('cms/users/' . $id) }}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="DELETE">
      <input type="submit" name="submit" value="Delete" class="btn btn-danger">
      <a href="{{ url('cms/users') }}" class="btn btn-default">Cancel</a>
    </form>
  </div>
@endsection