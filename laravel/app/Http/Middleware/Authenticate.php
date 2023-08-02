<?php

namespace App\Http\Middleware;


use Illuminate\Http\Request;
use Closure;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle(Request $request, Closure $next)
    {   

        if(!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login before proceed to website');

        }

        if (auth()->user()->status == 'ban') {
            return redirect()->route('login')->with('error', 'You are banned');
        }

        return $next($request);
    }
}

