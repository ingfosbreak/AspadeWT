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
        
        $validated = UserService::getUserManager()->getUserValidate($request);

        if ($validated) {
            
            if (UserService::getUserManager()->login($validated) == "admin") {
                return redirect()->route('admin.main');
            }

            if (UserService::getUserManager()->login($validated) == "user") {
                return redirect()->route('user.main');
            }

            return redirect()->back()->with('error', 'Please check your username or password again');

            
        }

        return redirect()->back()->with('error', 'Your request is not validated');


    }

    
}