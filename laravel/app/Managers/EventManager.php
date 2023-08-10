<?php

namespace App\Managers;


use App\Models\Event;
use App\Models\EventInfo;

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


    // EventInfo

    public function createEventInfo(Request $request) {

        if (EventInfo::count() == 0) {
            
            $event_info = new EventInfo;
            $event_info->event_id = (int) $request->data['event_id'];
            $event_info->order = 1000;

            if ($event_info->save()) {
                return true;
            }
            return false;
              
        }

        $maxValue = EventInfo::max('order');

        $event_info = new EventInfo;
        $event_info->event_id = (int) $request->data['event_id'];  
        $event_info->order =  $maxValue + 1000;  

        if ($event_info->save()) {
            return true;
        }
        return false;

    }


    public function editEventInfo(Request $request) {

        $event_info = EventInfo::find($request->data['info_id']);
        $event_info->text = $request->data['text'];

        if ($event_info->save()) {
            return true;
        }
        return false;
        

    }
    


}