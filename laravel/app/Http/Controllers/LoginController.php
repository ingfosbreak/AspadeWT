<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Models\UserEntry;

class LoginController extends Controller
{
    public function getLoginPage() {
        return view('login');
    }

    public function getAccountPage(UserEntry $user) {

        if ($user->role == "admin") {
            return view('admin.admin-main',['admin' => $user]);
        }

        return view('user.user-main',['user' => $user]);
    }

 

    public function login(Request $request) {

        $result = UserService::getUserManager()->login($request);

        if ( $result == "no username in system" ) {
            return redirect()->back()->with('error', 'no username in system');
        }

        if ( $result == "Your password wrong" ) {
            return redirect()->back()->with('error', 'your password wrong');
        }

        return redirect()->route('login.user',['user'=> $result]);
    
    }
}
