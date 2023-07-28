<?php

namespace App\Managers;

use App\Models\UserEntry;
use App\Models\Event;
use App\Models\EventUserEntry;

use Illuminate\Http\Request;


class EventManager {

    public function __construct() {}

    public function getAllEvent() {
        return Event::get();
    }

    public function getThatEvent(string $id) {
        return Event::find((float)$id);
    }

    


}