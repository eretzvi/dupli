<!doctype html>
<html>
    <head>

        <script type='text/javascript'>
            var BASE_URL = "{{ url('') }}/";
        </script>
 
        <title> Duplibase  </title>
        @include('includes.head')
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">

    </head>

    <body id="cms">
        <!-- header -->
        <div class="nav navbar navbar-inverse navbar-static-top">
            <div class='container'>

    
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a  target='_blank' href="{{url('')}}"><i class="fa fa-chevron-left"></i> Back to website</a> </li>
                        <li><a href="{{url('user/logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /Header -->

        <!-- Main sidebar-->
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
             
                    <div class="col-sm-9">

                        @if (Session::has('sm'))
                        <div class='sm-box alert alert-success'>
                            <p><strong>{{Session::get('sm') }}</strong></p>
                        </div>
                        @endif
                        @if ( count($errors) > 0)
                        <ul>      <div class='err-box alert alert-danger'>
                                @foreach ($errors->all() as $error)       
                                <li> {{$error}}</li>      
                                @endforeach
                            </div>
                        </ul>
                        @endif
                        @yield('cms_content')
                    </div>
                    <!--/col-span-9-->
                </div>
            </div>
        </div>
        <!-- /Main -->
        @include('includes.scripts')
                <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

    </body>

</html>