<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;
use App\Models\UserEntry;
use App\Http\Requests\UserRequest;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function getLoginPage() {
        return view('login');
    }

    public function login(UserRequest $request) {
        
        $validated = UserService::getUserManager()->getUserValidate($request);

        if ($validated) {
            
            if (UserService::getUserManager()->login($validated) == "admin") {
                return view('admin.main');
            }

            if (UserService::getUserManager()->login($validated) == "user") {
                return view('user.main');
            }

            return redirect()->back()->with('error', 'Please check your username or password again');

            
        }

        return redirect()->back()->with('error', 'Your request is not validated');


    }
}