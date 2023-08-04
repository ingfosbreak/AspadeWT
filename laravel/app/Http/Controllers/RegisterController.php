<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Models\User;

class RegisterController extends Controller
{
    public function getRegisterFirstPage() {
        return view('auth.register');
    }

    public function getRegisterSecondPage(int $user_id) {
        return view('auth.register2',['user_id' => $user_id]);
    }

    public function registerFirstStage(Request $request) {

        $validated = UserService::getUserManager()->getUserRegisterValidate($request);

        if ($validated) {

            $user = UserService::getUserManager()->createUser($request);

            if ($user == false) {
                redirect()->back()->with('error', 'failed to regis your user');
            }

            return redirect()->route('register.info',['user_id' => $user->id]);
        
        }
        
        return redirect()->back()->with('error', 'Username already in use');
        
    }

    public function registerSecondStage(Request $request, int $user_id) {

        $validated = UserService::getUserManager()->getUserRegisterSecondValidate($request);

        if ($validated) {
            return UserService::getUserManager()->createUserFull($request, $user_id);

            $userfull = UserService::getUserManager()->createUserFull($request, $user_id);

            if ($userfull) {
                return redirect()->route('login')->with('success','You have successful registered');
            }

            return redirect()->back()->with('error', 'failed to regis your infomation');

        }
        
        return redirect()->back()->with('error', 'email already in use');
    }
}
