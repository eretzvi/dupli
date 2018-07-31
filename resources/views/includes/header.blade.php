
        <div class="navbar-more-overlay"></div>

<div id="mobile-bar"  class="container-fluid navbar-more">
     
                        <a class='toggle-more top-right' href="#" onclick="$('.navbar-more').toggle();">
                                &times;
                   </a>
        <ul class="navbar col-xs-6 col-sm-6 nav navbar-nav navbar-left mobile-bar">
            
               @if (Session::has('user_id') && Session::has('user_name'))       
     
             <li class="navbar-link menu-mobile-bar">
                        <a href="{{url('user/account')}} ">
                            <span class="menu-icon fa fa-home"></span>
                            <span class="hidden-xs">Account</span>
                            <span class="visible-xs">Account</span>
                        </a>
                    </li>

                    <li class="navbar-link menu-mobile-bar">
                        <a href="{{url('user/logout')}} ">
                              <span class="menu-icon fa fa-logout"></span>    
                        <span class="hidden-xs">Logout</span>
                            <span class="visible-xs">Logout</span>
                        </a>
                            
                    </li>   
             @else
                    <li class="navbar-link menu-mobile-bar">
                        <a href="{{url('user/register')}} ">
                            <span class="menu-icon fa fa-user"></span>
                            <span class="hidden-xs">Register</span>
                            <span class="visible-xs">Register</span>
                        </a>
                    </li>

                    <li class="navbar-link menu-mobile-bar">
                        <a href="{{url('user/login')}} ">
                              <span class="menu-icon fa fa-login"></span>    
                        <span class="hidden-xs">Login</span>
                            <span class="visible-xs">Login</span>
                        </a>
                            
                    </li>   
              @endif
                </ul>	
 
   </div>    </div> 
        
       <!---    END MOBILE NAVBAR 
       
                START MAIN NAVBAR    -->       
       
        <nav id='navbar' class="navbar navbar-inverse animate">
             <div class="container">
                <div class="navbar-header hidden-xs">
                    Duplitrade

                </div>
           

                  
      
                    <ul class="nav navbar-nav navbar-right hidden-xs">
                       
               @if (Session::has('user_id') && Session::has('user_name'))
<li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hi, {{strstr(Session::get('user_name'),' ',1) }} <b class="caret"></b>
                <ul class="dropdown-menu"></a>
	          <li class='dropdown-item'> <a href="{{url('user/account')}}">&nbsp;My Account&nbsp; </a></li>
	        
	<li class='dropdown-item'> <a href="{{url('user/orders')}}">&nbsp;My Orders&nbsp;  </a> </li>
	          
	        </ul>
	      </li>     

   
        @if (Session::has('is_admin'))
                  <li>
                        <a href="{{url('cms')}}">
                             <span class="hidden-xs">CMS</span>
                            <span class="visible-xs">CMS</span>
                        </a>
                    </li>
                 
                @endif
                    <li>
                        <a href="{{url('user/logout')}} ">
                            <span class="hidden-xs">Logout</span>
                            <span class="visible-xs">Logout</span>
                        </a>
                    </li>   
              @else
              

                        <li>
                            <a href="{{url('user/register')}} ">
                                 <span class="hidden-xs">Register</span>
                                <span class="visible-xs">Register</span>
                            </a>
                        </li>   
                        <li>
                            <a href="{{url('user/login')}}">
                                 <span class="hidden-xs">Login</span>
                                <span class="visible-xs">Login</span>
                            </a>
                        </li>
                    @endif

                    </ul>
                    
        </div> 
            </div>
            
        </nav>