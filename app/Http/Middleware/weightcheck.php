<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class weightcheck
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
      if($request->weight && $request->weight<40){
        return redirect('weight is less thab 40 so no access toRoutemiddle
        ware bur you can acess other pages');
      }

        return $next($request);
    }
}
