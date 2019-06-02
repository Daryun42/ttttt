<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AccessVisiteur
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
        if(Auth::user()->hasAnyRole('visiteur_medicaux'))
        {
            return $next($request);
        }
        return redirect('home');
    }
}
