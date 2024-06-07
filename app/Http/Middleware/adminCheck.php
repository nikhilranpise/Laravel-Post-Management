<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class adminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(! Session::has('adminData'))
        {
            return redirect('/');
        }
        return $next($request);
        return $next($request);
    }
}
