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
        if (\Auth::guard()->guest()) {
            return response('Unauthorized', 401);
        }

        return $next($request);
    }
}
