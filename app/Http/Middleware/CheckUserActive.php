<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserActive
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
 public function handle(Request $request, Closure $next)
{
    if (auth()->check() && !auth()->user()->is_active) {
        auth()->logout();
        request()->session()->invalidate();
    request()->session()->regenerateToken();
        return redirect()->route('login')->with('error', 'Tu cuenta está desactivada. Contacta al administrador.');
    }

    return $next($request);
}
}
