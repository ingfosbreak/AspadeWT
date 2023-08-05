<?php

namespace App\Managers;

use App\Models\User;
use App\Models\UserFull;
use App\Models\UserToken;
use App\Models\UserImage;
use Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Phattarachai\LaravelMobileDetect\Agent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Services\ImageService;
use Illuminate\Database\Eloquent\ModelNotFoundException;  
use App\Http\Requests\OldPasswordRequest;



class UserManager {

    public function __construct() {}


    // for attempt AUTH
    public function username() {
        return 'username';
    }

    /*
     *      Login 
     * 
     */

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

    public function generateToken() {
        return Carbon::now();
    }

    public function getTokenValidate() {

        $agent = new Agent();

        $matchThese = ['user_id' => Auth::getUser()->id, 'device' => $agent->device(), 'browser' => $agent->browser()];
        
        try {

            $user_token = UserToken::where($matchThese)->firstOrFail();
            return UserToken::where($matchThese)->firstOrFail()->token;
      
        } catch (ModelNotFoundException $exception) {
      
            return false;
        
        }

        
    }

    public function pushTokenToUserToken(string $token) {
        
        $agent = new Agent();

        $user_token = new UserToken();
        $user_token->user_id = Auth::getUser()->id;
        $user_token->token = $token;
        $user_token->device = $agent->device();
        $user_token->platform = $agent->platform();
        $user_token->browser = $agent->browser();
        $user_token->system = "desktop";
        if ($agent->isMobile()) {
            $user_token->system = "mobile";
        }


        return $user_token->save();

    }

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



    public function createUserImage(array $success_image, int $user_id) {

        $userimage = new UserImage();
        $userimage->user_id = $user_id;
        $userimage->name = $success_image['name'];
        $userimage->image_path = $success_image['image_path'];

        return $userimage->save();
    }



    public function createUserFull(Request $request) {
        
        $user_id = $request->session()->get('user_id');

        $userfull = new UserFull();
        $userfull->user_id = $user_id;
        $userfull->email = $request->email;
        $userfull->faculty = $request->faculty;
        $userfull->firstname = $request->firstname;
        $userfull->lastname = $request->lastname;
        $userfull->year = $request->year;

        if ( $request->image != null ) {
            $file = $request->file('image');
            $success_image = ImageService::getImageManager()->uploadOneImage('profile_images/',$file);
            
            if ($success_image == false) {
                return false;
            }
            
            if (!$this->createUserImage($success_image, $user_id)) {
                return false;
            }

        }

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




    /*
     * 
     *  Reset password 
     * 
     */
    
     public function getResetPasswordValidate(Request $request) {

        $validated =  Validator::make($request->all(),[
            'oldpassword' => ['required', new OldPasswordRequest(Auth::getUser())],
            'newpassword' => ['required'],
        ]);
        
        if ($validated->fails()) {
            return false;
        }

        return true;
    }

    

}