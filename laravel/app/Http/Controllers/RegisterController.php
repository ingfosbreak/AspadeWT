<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\NotifyService;
use App\Models\User;

class RegisterController extends Controller
{
    public function getRegisterFirstPage() {
        return view('auth.register');
    }

    public function getRegisterSecondPage(int $userid) {
        return view('auth.register2',['userid' => $userid]);
    }

    public function registerFirstStage(Request $request) {

        UserService::getUserManager()->getUserRegisterValidate($request);

        // if ($validated) {

            $user = UserService::getUserManager()->createUser($request);

            if ($user == false) {
                redirect()->back()->with('error', 'failed to registered your user');
            }

            // $request->session()->put('user_id', $user->id);
            $userid = $user->id;
            return redirect()->route('register.info',['userid' => $userid]);
        
        // }
        
        // return redirect()->back()->with('error', 'Username already in use');
        
    }

    public function registerSecondStage(Request $request, int $userid) {

        UserService::getUserManager()->getUserRegisterSecondValidate($request);

        // if ($validated) {

            $userfull = UserService::getUserManager()->createUserFull($request, $userid);

            NotifyService::getNotifyManager()->userNoti($userid, 
            'noti', 
            "Hello new User!!!", 
            "Welcome to AspadeWT Event Organizer!!!");

            if ($userfull) {

                // if ($request->session()->exists('user_id')) {
                //     $request->session()->forget('user_id');
                // }
                
                return redirect()->route('login')->with('success','You have successful registered');
            }

            return redirect()->back()->with('error', 'failed to regis your infomation');

        // }
        
        // return redirect()->back()->with('error', 'email already in use');
    }
}
