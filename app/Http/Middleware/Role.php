<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // it is used to check if the user is authenticated and has the role that is passed to the middleware
        if ($request->user()->role !== $role) {
            return redirect()->route('login');
        }

        return $next($request);
    }
}
