<?php

namespace App\Managers;


use App\Models\Event;

use Illuminate\Support\ItemNotFoundException;
use Illuminate\Http\Request;


class EventManager {

    public function __construct() {}

    public function getAllEvent() {
        return Event::get();
    }

    public function getThatEvent(string $id) {
        return Event::find((float)$id);
    }
    public function isUserInEvent(int $userid ,Event $event){
        
        $event_users = $event->users;
        try {
            $event_users->where('id',$userid)->firstOrFail();
            return false;
      
        } catch (ItemNotFoundException $exception) {
      
            return true;
        
        }
    }

    


}