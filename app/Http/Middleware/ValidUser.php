<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class ValidUser {

  public function handle($request, Closure $next) {
    
   
     if( Session::has('user_id') ){
       return redirect('');
      
    } else {
        Session::set('user_ip',$request->ip());
      return $next($request);
      
    }
    
  }

}
