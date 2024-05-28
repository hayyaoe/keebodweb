<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param string|null
     * @param \Illuminate\Http\Request $request
     * @return mixed
     */
    public function handle(
        Request $request,
        Closure $next,
        $guard = null
    ): Response {
        if (Auth::guard($guard)->check()) {
            return redirect("/");
        }

        return $next($request);
    }
}
