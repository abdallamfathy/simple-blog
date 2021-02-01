<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\User;
use Auth;

class Admin
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
        
        if(!Auth::user()->admin)
        {
            Session::flash('info','Your dont have permission to do this');
            return redirect()->back();
        }

        return $next($request);
    }
}
