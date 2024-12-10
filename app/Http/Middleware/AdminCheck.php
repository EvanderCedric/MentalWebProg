<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminCheck
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is logged in and is an admin
        if (auth()->check() && auth()->user()->is_admin) {
            return $next($request);
        }

        // If not admin, redirect to home or another page
        return redirect('/')->with('error', 'Access Denied. Admins only.');
    }
}
