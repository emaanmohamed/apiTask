<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class checkUserAdminRole
{
    public function handle($request, Closure $next)
    {
       // dd(Auth()->check());
        if (Auth()->check()){
            if (Auth()->check() && Auth::user()->isAdmin){
                return Auth::onceBasic() ?: $next($request);
            }
        }
        return $next($request);
    }
}
