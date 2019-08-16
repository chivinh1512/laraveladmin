<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckLevel
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
        if(isset(Auth::user()->level)){
            if (Auth::user()->level == 1) {
                return $next($request);
            }
        }
        return redirect('');
    }
}
