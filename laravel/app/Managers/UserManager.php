<?php

namespace App\Managers;

use App\Models\User;
use App\Models\UserFull;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



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

        $validated =  $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if ($validated) {
            return $validated;
        }

        return false;
    }


    public function getUserRegisterValidate(Request $request) {

        $validated = $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => 'required',
        ]);

        if ($validated) {
            return $validated;
        }

        return false;

    }

    public function createUser(array $credentials) {

        return User::create([
            'username' => $credentials['username'],
            'role' => 'user',
            'status' => 'active',
            'password' => Hash::make($credentials['password']),
        ]);
       

    }


    public function getUserRegister2Validate(Request $request) {

        $validated = $request->validate([
            'email' => ['nullable','unique:'.UserFull::class],
            'faculty' => 'nullable',
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'image' => 'nullable',
            'year' => 'nullable',

        ]);

        if ($validated) {
            return $validated;
        }

        return false;

    }

    public function createUserFull(array $credentials) {

        


    }


    

}