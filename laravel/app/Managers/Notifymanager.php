<?php

namespace App\Managers;

use App\Models\EventAnnouncement;
use App\Models\UserNoti;
use App\Models\Complaint;

use Illuminate\Http\Request;


class NotifyManager {

    public function __construct() {}

    public function userNoti(int $userid, string $type, string $name, string $description) {

        $noti = new UserNoti();
        $noti->user_id = $userid;
        $noti->type = $type;
        $noti->name = $name;
        $noti->description = $description;
        $noti->save();

    }

    public function eventNoti(int $eventid, string $type, string $title, string $detail) {

        $announce = new EventAnnouncement();
        $announce->event_id = $eventid;
        $announce->type = $type;
        $announce->title = $title;
        $announce->detail = $detail;
        $announce->save();
        
    }

    public function reportEvent(Request $request) {
        // "name":null,"description":null,"event_id":"1","user_id":"2"}
        $report = new Complaint();
        $report->user_id = $request->get('user_id');
        $report->event_id = $request->get('event_id');
        $report->name = $request->get('name');
        $report->description = $request->get('description');



    }


    


}