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

            $user = UserService::getUserManager()->createUser($validated);

            return redirect()->route('register.info',['user_id' => $user->id]);
        
        }
        
        return redirect()->back()->with('error', 'Your request is not validated');
        
    }

    public function registerSecondStage(Request $request) {

        $validated = UserService::getUserManager()->getUserRegister2Validate($request);

        if ($validated) {

            

        }
        
        return redirect()->back()->with('error', 'Your request is not validated');
    }
}
