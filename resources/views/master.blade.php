<!doctype html>

<head>
    
        <script type='text/javascript'> 
        var BASE_URL = "{{ url('') }}/";
        </script>
        <title> Users</title>
        @include('includes.head')
</head>
<body>
    <div id="fb-root">
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

</div>
<div class="container-fluid">

   <header style='z-index:100;'  id='header' class="row">
        @include('includes.header')
   </header>
    
 <div id="all-content" style='z-index:0;' class="container-fluid" >
    <div id="main" class="row">
 

 
        <!-- main content -->
        <div id="content" class="col-md-10">
            @if (Session::has('sm'))
      <div class='sm-box alert alert-success'>
          <p><strong>{{Session::get('sm') }}</strong></p>
      </div>
            @endif
     @if ( count($errors) > 0)
     <div class='err-box alert alert-danger'>
     <strong>Whoops!</strong> There were some problems with your input.<br><br>
     <ul>      

      @foreach ($errors->all() as $error)       
      <li> {{$error}}</li>
       
      @endforeach
     </ul>
     </div>

         @endif
         
         
<div class="row">
 
   <div  class="panel panel-default col-md-5 col-md-offset-2">
 
</div>
</div><br>    
        <div class='row'>
            @yield('content')
               </div>   
 
     </div> 
 
        </div>
    </div>
  </div>
     
  
    @include('includes.scripts')
</body>

 