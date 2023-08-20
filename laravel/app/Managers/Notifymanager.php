<?php

namespace App\Managers;

use App\Models\EventAnnouncement;
use App\Models\UserNoti;

use Illuminate\Http\Request;


class NotifyManager {

    public function __construct() {}

    public function userNoti(int $userid, string $type, string $name, $description) {

        $noti = new UserNoti();
        $noti->user_id = $userid;
        $noti->type = $type;
        $noti->name = $name;
        $noti->description = $description;
        $noti->save();

    }

    public function eventNoti() {

    }


    


}