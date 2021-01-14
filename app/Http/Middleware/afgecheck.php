<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class afgecheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */


     /*
     here in this method we are writing the our request
     to filter out who can access and who cannot acces our web page
     */
    public function handle(Request $request, Closure $next)
    {
         echo " this is from genelra middleware <br> <br> <br> ";
         // checking if there is any reqauets and if the age is
         // less than 18 then  print  no accesss
         // if age is greater than 18 then access the index page
         if($request->age && $request->age<18){
           return redirect('no acccessss ');
         }
        return $next($request);
    }
}
