<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class LoginController extends Controller
{
    public function getLoginPage() {
        return view('login');
    }

    public function login(Request $request) {

        $result = UserService::getUserManager()->login($request);

        if ( $result == "no username in system" ) {
            return redirect()->back()->with('error', 'no username in system');
        }

        if ( $result == "Your password wrong" ) {
            return redirect()->back()->with('error', 'your password wrong');
        }

        if ( $result == "you are admin" ) {
            return redirect()->route('login.admin',['admin'=> $result]);
            
        }

        return view('user.user-main',['user' => $result]);



    }
}
