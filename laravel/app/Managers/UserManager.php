<?php

namespace App\Managers;

use App\Models\User;
use App\Models\UserFull;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;



class UserManager {

    public function __construct() {}

    public function getAllUsers() {
        return User::with('UserFull')->get();
    }

    public function getThatUser(string $id) {
        return User::with('UserFull')->find((float)$id);
    }

    public function checkIfUser(string $username) {
        return User::where('username',$username)->firstOrFail();
    }


    public function updateUser(Request $request, string $id) {

        if ($id == null) {
            return false;
        }
        
        $user = self->getThatUser($id);
        
        // do something;

        return $user->save();


    }


    public function login(array $credentials) {
        
        if (Auth::attempt($credentials, true) && Auth::getUser()->role == "admin") {
            return "admin";
        }

        if (Auth::attempt($credentials, true) && Auth::getUser()->role == "user") {
            return "user";
        }

        return "failed";

    }

    public function username() {
        return 'username';
    }

    public function getUserLoginValidate(Request $request) {

        $validated =  Validator::make($request->all(),[
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if ($validated->fails()) {
            return false;
        }

        return $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
    }


    public function getUserRegisterValidate(Request $request) {

        $validated = Validator::make($request->all(),[
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => 'required',
        ]);

        if ($validated->fails()) {
            return false;
        }

        return $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => 'required',
        ]);

    }

    public function createUser(array $credentials) {


        $user = new User();
        
        $user->username = $credentials['username'];
        $user->role = "user";
        $user->status = "active";
        $user->password = Hash::make($credentials['password']);
        
        if ($user->save()) {
            return $user;
        }
        return false;

        // return User::create([
        //     'username' => $credentials['username'],
        //     'role' => 'user',
        //     'status' => 'active',
        //     'password' => Hash::make($credentials['password']),
        // ]);
       

    }


    public function getUserRegisterSecondValidate(Request $request) {

        $validated = Validator::make($request->all(),[
            'email' => ['nullable','unique:'.UserFull::class],
            'faculty' => 'nullable',
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'image' => 'nullable',
            'year' => 'nullable',

        ]);

        if ($validated->fails()) {
            return false;
        }

        return $request->validate([
            'email' => ['nullable','unique:'.UserFull::class],
            'faculty' => 'nullable',
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'image' => 'nullable',
            'year' => 'nullable',
        ]);

    }

    public function createUserFull(array $credentials, int $user_id ) {

        $userfull = new UserFull();
        $userfull->user_id = $user_id;
        $userfull->email = $credentials['email'];
        $userfull->faculty = $credentials['faculty'];
        $userfull->firstname = $credentials['firstname'];
        $userfull->lastname = $credentials['lastname'];
        $userfull->image_path = $credentials['image'];
        $userfull->year = $credentials['year'];

        return $userfull->save();

        // return UserFull::create([
        //     'user_id' => $user_id,
        //     'email' => Hash::make($credentials['email']),
        //     'faculty' => $credentials['faculty'],
        //     'firstname' => $credentials['firstname'],
        //     'lastname' => $credentials['lastname'],
        //     'image' => $credentials['image'],
        //     'year' => $credentials['year'],
        // ]);

    }


    

}