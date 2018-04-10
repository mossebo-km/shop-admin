<?php

namespace App\Http\Middleware;

use Closure;

// todo: сделать периодическую смену токенов

class ApiAuth
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
        if (\Auth::guard()->user()) {
            return $next($request);
        }

        return response('Unauthorized', 401);
    }
}
