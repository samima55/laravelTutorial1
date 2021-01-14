<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class heightcheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

          if($request->height && $request->height< 100){
            return redirect(' NO ACCESS DUE TO GROUP MIDDLE WARE');
          }
        return $next($request);
    }
}
