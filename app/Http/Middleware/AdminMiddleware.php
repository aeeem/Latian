<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        //cek apakah user sudah login
        if(Auth::check()){

            //cek apakah user memiliki role "admin" jika ya maka request selanjutnya di jalan kan
            //jika tidak maka akan di abort
            if (Auth::user()->IsAdmin()) {
                
                return $next($request);
            }
        }
        return abort(404);
        
    }
}
