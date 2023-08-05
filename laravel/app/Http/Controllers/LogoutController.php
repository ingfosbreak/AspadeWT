<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserToken;

class LogoutController extends Controller
{
    public function logout(Request $request) {

        Auth::logout();
        UserToken::where('token', $request->session()->get('token'))->delete();
        
        if ($request->session()->exists('token')) {
            $request->session()->forget('token');
        }

        return redirect()->route('welcome');


    }

    public function logoutSession(Request $request) {
        
        UserToken::where('user_id', Auth::getUser()->id)->delete();
        
        Auth::logout();
        
        if ($request->session()->exists('token')) {
            $request->session()->forget('token');
        }

        return redirect()->route('welcome');
    }
}
