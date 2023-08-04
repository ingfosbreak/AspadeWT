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
        
        if ($validated) {

            $account = UserService::getUserManager()->login($request);
            
            if ($account == "admin") {

                $token = UserService::getUserManager()->generateToken();
                
                if (UserService::getUserManager()->pushTokenToUserToken($token) == false) {
                    return redirect()->back()->with('error', 'Can not generate login token');
                } 

                $request->session()->put('token', $token);

                return redirect()->route('admin.main');
            }

            if ($account == "user") {
                
                $token = UserService::getUserManager()->generateToken();
                
                if (UserService::getUserManager()->pushTokenToUserToken($token) == false) {
                    return redirect()->back()->with('error', 'Can not generate login token');
                } 

                $request->session()->put('token', $token);

                return redirect()->route('user.main');
            }

            return redirect()->back()->with('error', 'Please check your username or password again');

            
        }

        return redirect()->back()->with('error', 'Your request is not validated');


    }

    
}