<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Arrendador
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
        if (Auth::user()->isArrendador()) {
            return $next($request);
        }else{
            abort(401);
        }
    }
}
