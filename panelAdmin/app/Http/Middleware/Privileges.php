<?php

namespace panelAdmin\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Privileges
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
        if(!Auth::check()){
            return redirect('/');
        }
        else{
            if(Auth::user()->profile_type == 'root'){

                return $next($request);

            }else{
                return redirect('/');

            }
        }



    }
}
