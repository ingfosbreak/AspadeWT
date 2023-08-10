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

        $event_info = EventInfo::find((int) $request->data['info_id']);
        $event_info->text = $request->data['text'];

        if ($event_info->save()) {
            return true;
        }
        return false;
        

    }

    public function editOrder(Request $request) {

        $all_event_infos = EventInfo::where('event_id',$request->data['event_id'])->orderBy('order', 'asc')->get();
        $event_info = $event_info = EventInfo::find((int)$request->data['info_id']);
        $pos = 0;

        foreach ($all_event_infos as $event) {
            if ($event->id == $event_info->id) {
                break;
            }
            
            $pos += 1;

        }


        // if same position

        if ((int) $request->data['pos'] == $pos) {
            return true;
        }

        // if first

        if ((int) $request->data['pos'] == 0) {
            $order = $all_event_infos[0]->order;
            $event_info->order = $order;
            $event_info->save();

            foreach ($all_event_infos as $event) {
                if ($event->id == $event_info->id) {
                    continue;
                }    

                $event->order = $event->order + 1000;
                $event->save();
            }

            return true;
            
        }

        // if last

        if ((int) $request->data['pos'] == (EventInfo::count() - 1) ) {
            $order = $all_event_infos[EventInfo::count() - 1]->order;
            $event_info->order = $order + 1000;
            $event_info->save();

            return true;
        }

        
        if ( ( $all_event_infos[(int) $request->data['pos']]->order - $all_event_infos[(int) $request->data['pos'] - 1]->order ) == 1 ) {

            for ($x = (int) $request->data['pos']; $x <= (EventInfo::count() - 1); $x++) {
                $all_event_infos[$x]->order = $all_event_infos[$x]->order + 1000;
                $all_event_infos[$x]->save();
            }

        }


        $order = round( ( $all_event_infos[(int) $request->data['pos']]->order + $all_event_infos[(int) $request->data['pos'] - 1]->order ) / 2 );
        $event_info->order = $order;
        $event_info->save();

        return true;
    
        
    }
    


}