<?php

namespace App\Http\Middleware;


use Illuminate\Http\Request;
use Closure;
use App\Models\UserToken;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle(Request $request, Closure $next)
    {   
        // check login

        if(!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please login before proceed to website');

        }

        // check ban

        if (auth()->user()->status == 'ban') {
            return redirect()->route('login')->with('error', 'You are banned');
        }

        // check session 

        if ($request->session()->exists('token')) {
            
            try {

                $user_token = UserToken::where('token',$request->session()->get('token'))->firstOrFail();
                return $next($request);
          
            } catch (ModelNotFoundException $exception) {
          
                return redirect()->route('login')->with('error', 'Token expired');
            
            }
        }

        return redirect()->route('login')->with('error', 'Token expired');


    }
}