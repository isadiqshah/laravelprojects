<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the authenticated user has admin role
            if (Auth::user()->role === 1) {
                return $next($request);
            } else {
                // If not admin, logout and redirect to home
                Auth::logout();
                return redirect()->route('home')->with('error', 'You do not have permission to access this page.');
            }
        } else {
            // If not authenticated, logout and redirect to home
            Auth::logout();
            return redirect()->route('home')->with('error', 'You must be logged in as an admin to access this page.');
        }
    }
}
