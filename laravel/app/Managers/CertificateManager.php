<?php

namespace App\Managers;

use App\Models\Certificate;
use App\Models\Event;

use Illuminate\Http\Request;


class CertificateManager {

    public function __construct() {}

    public function getAllCertificate() {
        return Certificate::get();
    }

    public function createCertificate(Event $event) {
        $members = $event->users;

        foreach ($members as $member) {

            $certi = new Certificate();
            $certi->user_id = $member->id;
            $certi->event_id = $event->id;
            $certi->name = $event->name;
            $certi->description = "This Certificate is certifying that You have attended ". $event->name ." Event";
            $certi->save();
        }
    }

    


}