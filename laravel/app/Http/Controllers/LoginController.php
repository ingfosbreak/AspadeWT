<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserService;
use App\Http\Requests\UserRequest;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    public function getLoginPage() {
        return view('auth.login');
    }

    public function login(LoginRequest $request) {
        

        UserService::getUserManager()->authenticate($request);    

        $account = UserService::getUserManager()->login($request);
                
        if ($account == "admin") {

            $token = UserService::getUserManager()->generateToken();

            if (UserService::getUserManager()->getTokenValidate() != false) {
                        
                $token = UserService::getUserManager()->getTokenValidate();
                $request->session()->put('token', $token);
                        
                return redirect()->route('admin.request');

            }
                
            if (UserService::getUserManager()->pushTokenToUserToken($token) == false) {
                return redirect()->back()->with('error', 'Can not generate login token');
            } 

                $request->session()->put('token', $token);

                return redirect()->route('admin.request');
        }

        if ($account == "user") {
                    
            $token = UserService::getUserManager()->generateToken();

            if (UserService::getUserManager()->getTokenValidate() != false) {
                        
                $token = UserService::getUserManager()->getTokenValidate();
                $request->session()->put('token', $token);
                        
                return redirect()->route('user.main');

            }
                    
            if (UserService::getUserManager()->pushTokenToUserToken($token) == false) {
                return redirect()->back()->with('error', 'Can not generate login token');
            } 

            $request->session()->put('token', $token);

            return redirect()->route('user.main');
        }
        


    }

    
}