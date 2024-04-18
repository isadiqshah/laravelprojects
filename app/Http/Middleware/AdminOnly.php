<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AdminOnly
{
    public function handle($request, Closure $next)
    {
        // Check if the user is an admin or accessing the registration form
        if ($request->user() && $request->user()->role === 1) {
            return $next($request);
        }

        // Allow access to the registration form
        if ($request->is('admin/register')) {
            return $next($request);
        }

        // Redirect or deny access for other routes
        return redirect()->route('home')->with('error', 'Access denied.');
    }
}
