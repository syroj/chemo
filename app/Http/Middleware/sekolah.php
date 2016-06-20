<?php

namespace App\Http\Middleware;

use Closure;

class sekolah
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
        if (auth()->check()&&$request->user()->rule=='sekolah') {
            return $next($request);
        }else{
            return view('errors.404');
        }

    }
}
