<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ComingSoon
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         if (
            $request->is('admin*') ||
            $request->is('filament*') ||
            $request->is('login') ||
            $request->is('logout') ||
            $request->is('register') ||
            $request->is('password/*')
        ) {
            return $next($request);
        }

        // Show coming soon page
        return response()->view('coming-soon');
    }
}
