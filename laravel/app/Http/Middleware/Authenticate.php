<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {   
        $request->session()->regenerate();

        if(!auth()->guard('user-entry')->check()) {
            return redirect()->back()->with('error', 'Your request is not validated');

        }

        return $next($request);
    }
}
