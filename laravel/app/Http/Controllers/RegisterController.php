<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;

class RegisterController extends Controller
{
    public function getRegisterFirstPage() {
        return view('auth.register');
    }

    public function getRegisterSecondPage() {
        return view('auth.register2');
    }

    public function registerFirstStage(Request $request) {

       return redirect()->route('register.info');


    }


    public function registerSecondStage(Request $request) {
        return $request;
    }
}
