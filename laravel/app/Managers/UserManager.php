<?php

namespace App\Managers;

use App\Models\UserEntry;
use App\Models\UserFull;

use Illuminate\Http\Request;


class UserManager {

    public function __construct() {}

    public function getAllUsers() {
        return UserEntry::with('UserFull')->get();
    }

    public function getThatUser(string $id) {
        return UserEntry::with('UserFull')->find((float)$id);
    }

    public function createUser(Request $request) {
        // $user_name = $request->get('name');
        $user_name = $request->get('name');
       
        if ($user_name == null){
            return "name can't be null";
        }

        if (UserEntry::where('username',$user_name)->firstOrFail() != null){
            return "name already in use";
        }

        // maybe checkpassword

        $new_user = new UserEntry();
        $new_user->username = $user_name;
        $new_user->email = "ingfosbreak@outlook.com";
        $new_user->role = "User";
        $first_section = $new_user->save();

        $new_user_info = new UserFull();
        $new_user_info->user_entry_id = $new_user->id;
        $new_user_info->password = "password";
        $new_user_info->name = "Panachai";
        $new_user_info->image_path = "null";
        $second_section = $new_user_info->save();

        return $first_section && $second_section;
    }


    public function updateUser(Request $request, string $id) {

        if ($id == null) {
            return false;
        }
        
        $user = self->getThatUser($id);
        
        // do something;

        return $user->save();


    }


    public function login(Request $request) {

        $username = $request['username'];
        $password = $request['password'];

        // check if have username
        if ( UserEntry::where('username',$username)->firstOrFail() == null ) {
            return "no username in system";
        }

        
        $user_entry = UserEntry::where('username',$username)->firstOrFail();

        // check password
        if ($password != $user_entry->userFull->password) {
            return "Your password wrong";
        }

        return $user_entry;


    }


}