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
use Illuminate\Support\Facades\Storage;



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

    /*
     *      Login 
     * 
     */

    public function login(Request $request) {
        
        $credentials = array(
            'username' => $request->username,
            'password' => $request->password,
        );
        
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

        return true;
    }






    /*
     * 
     *  Create User first stage 
     * 
     */

    public function getUserRegisterValidate(Request $request) {

        $validated = Validator::make($request->all(),[
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => 'required',
        ]);

        if ($validated->fails()) {
            return false;
        }

        return true;

    }

    public function createUser(Request $request) {


        
        $user = new User();
        $user->username = $request->username;
        $user->role = "user";
        $user->status = "active";
        $user->password = Hash::make($request->password);
        
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




    /*
     * 
     * 
     *   Create User Second stage 
     * 
     */



    public function getUserRegisterSecondValidate(Request $request) {

        $validated = Validator::make($request->all(),[
            'email' => ['nullable','unique:'.UserFull::class],
            'faculty' => 'nullable',
            'firstname' => 'nullable',
            'lastname' => 'nullable',
            'image' => 'nullable',
            'images.*' => 'nullable|mimes:png,gif,jpg,jpeg,bmp|max:2048',
            'year' => 'nullable',

        ]);

        if ($validated->fails()) {
            return false;
        }

        return true;

    }

    public function createUserFull(Request $request, int $user_id ) {


        // return $request->file('image')->getClientOriginalName();
        $userfull = new UserFull();
        $userfull->user_id = $user_id;
        $userfull->email = $request->email;
        $userfull->faculty = $request->faculty;
        $userfull->firstname = $request->firstname;
        $userfull->lastname = $request->lastname;
        $userfull->year = $request->year;
        $userfull->image_path = $request->image;

        // if ( $request->image != null ) {
        //     return $request->file('image')->getClientOriginalName();
        // }

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