<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class RegisterController extends Controller
{
    public function getRegisterFirstPage() {
        return view('auth.register');
    }

    public function getRegisterSecondPage(int $user_id) {
        return view('auth.register2',['user_id' => $user_id]);
    }

    public function registerFirstStage(Request $request) {
       return redirect()->route('register.info',['user_id' => 1]);


    }

    public function registerSecondStage(Request $request) {
        return $request;
    }
}
