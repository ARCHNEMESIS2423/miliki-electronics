<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class To_homePage
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (in_array($request->user()->role, ['admin', 'dev'], true)) {
            return redirect('/dashboard');
        }
        return $next($request);
    }
}
