<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Laracasts\Flash\Flash;
use App\User;

class ActiveAccount
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
        if(User::where('email','=',$request0->email)->count() > 0){
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'activated' => true])) {
                return $next($request);
            }else{
                Flash::info('Active su cuenta a través del email que le enviamos');
                return back();
            }
        }else{
            Flash::danger("La cuenta ".$request->email." no existe en nuestros registros");
            return back();
        }
    }
}
