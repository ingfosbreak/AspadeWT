<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;

use App\Http\Requests\UserRequest;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function getLoginPage() {
        return view('auth.login');
    }

    public function login(Request $request) {
        
        $validated = UserService::getUserManager()->getUserLoginValidate($request);
        echo("<script>console.log('PHP: " . gettype($validated) . "');</script>");
        
        if ($validated) {

            $account = UserService::getUserManager()->login($validated);
            
            if ($account == "admin") {
                $request->session()->regenerate();
                return redirect()->route('admin.main');
            }

            if ($account == "user") {
                $request->session()->regenerate();
                return redirect()->route('user.main');
            }

            return redirect()->back()->with('error', 'Please check your username or password again');

            
        }

        return redirect()->back()->with('error', 'Your request is not validated');


    }

    
}