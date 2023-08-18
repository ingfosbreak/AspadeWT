<?php

namespace App\Managers;


use App\Models\Event;
use App\Models\EventInfo;
use App\Models\EventUser;
use App\Models\RequestJoinEvent;
use App\Models\RequestJoinEventFile;
use App\Models\RequestCreateEvent;
use App\Models\RequestCreateEventConfirmationFile;
use App\Services\FileService;
use Illuminate\Support\Facades\Auth;
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

    // Event
    public function editPublistEvent(Request $request) {
        
        $event = Event::find((int) $request->get('data')['event_id']);
        $event->publish = $request->get('data')['publish'];
        
        if ($event->save()) {
            return true;
        }
        return false;
    }


    // EventInfo

    public function createEventInfo(Request $request) {

        if (EventInfo::count() == 0) {
            
            $event_info = new EventInfo;
            $event_info->event_id = (int) $request->get('data')['event_id'];
            $event_info->order = 1000;

            if ($event_info->save()) {
                return true;
            }
            return false;
              
        }

        $maxValue = EventInfo::max('order');

        $event_info = new EventInfo;
        $event_info->event_id = (int) $request->get('data')['event_id'];
        $event_info->order =  $maxValue + 1000;  

        if ($event_info->save()) {
            return true;
        }
        return false;

    }


    public function editEventInfo(Request $request) {

        $event_info = EventInfo::find((int) $request->get('data')['info_id']);
        $event_info->text = $request->get('data')['text'];

        if ($event_info->save()) {
            return true;
        }
        return false;
        

    }

    public function editOrderInfo(Request $request) {

        $all_event_infos = EventInfo::where('event_id',$request->get('data')['event_id'])->orderBy('order', 'asc')->get();
        $event_info = EventInfo::find((int)$request->get('data')['info_id']);
        $pos = 0;

        foreach ($all_event_infos as $event) {
            if ($event->id == $event_info->id) {
                break;
            }
            
            $pos += 1;

        }


        // if same position

        if ((int) $request->get('data')['pos'] == $pos) {
            return true;
        }

        // if first

        if ((int) $request->get('data')['pos'] == 0) {
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

        if ((int) $request->get('data')['pos'] == ((EventInfo::where('event_id', (int) $request->get('data')['event_id'])->count()) - 1) ) {
            $order = $all_event_infos[(EventInfo::where('event_id', (int) $request->get('data')['event_id'])->count()) - 1]->order;
            $event_info->order = $order + 1000;
            $event_info->save();

            return true;
        }

        // if order > pos

        if ($event_info->order > $all_event_infos[(int) $request->get('data')['pos']]->order) {

            if ( ( $all_event_infos[(int) $request->get('data')['pos']]->order - $all_event_infos[((int) $request->get('data')['pos']) - 1]->order ) == 1 ) {

                for ($x = (int) $request->get('data')['pos']; $x <= ((EventInfo::where('event_id',(int)$request->get('data')['event_id'])->count()) - 1); $x++) {
                    $all_event_infos[$x]->order = $all_event_infos[$x]->order + 1000;
                    $all_event_infos[$x]->save();
                }
    
            }


            $order = round( ( $all_event_infos[(int) $request->get('data')['pos']]->order + $all_event_infos[(int) $request->get('data')['pos'] - 1]->order ) / 2 );
            $event_info->order = $order;
            $event_info->save();

            return true;

        }

        if ( ( $all_event_infos[(int) $request->get('data')['pos'] + 1]->order - $all_event_infos[((int) $request->get('data')['pos'])]->order ) == 1 ) {

            for ($x = (int) $request->get('data')['pos'] + 1; $x <= ((EventInfo::where('event_id',(int)$request->get('data')['event_id'])->count()) - 1); $x++) {
                $all_event_infos[$x]->order = $all_event_infos[$x]->order + 1000;
                $all_event_infos[$x]->save();
            }

        }


        $order = round( ( $all_event_infos[(int) $request->get('data')['pos']]->order + $all_event_infos[(int) $request->get('data')['pos'] + 1]->order ) / 2 );
        $event_info->order = $order;
        $event_info->save();

        // if order < pos
        return true;
    
        
    }

    public function editTypeInfo(Request $request) {
        
        $event_info = EventInfo::find((int) $request->get('data')['info_id']);
        $event_info->type = $request->get('data')['type'];

        if ($event_info->save()) {
            return true;
        }
        return false;
    }

    public function removeEventInfo(Request $request) {
        
        $event_info = EventInfo::find((int) $request->get('data')['info_id']);
        
        if ($event_info->delete()) {
            return true;
        }
        return false;
    }

    public function requestCreateEvent(Request $request){

        $event = new RequestCreateEvent();
        $event->user_id = Auth::getUser()->id;
        $event->name = $request->get('name');
        $event->num_member = $request->get('num_member');
        $event->num_staff = $request->get('num_staff');
        $event->category = $request->get('category');
        $event->budget = $request->get('budget');
        $event->date = $request->get('date');
        $event->location = $request->get('location');
        $event->description = $request->get('description');
        if ($event->save()){
            if ($request->event_file_path != null) {
                // $files = $request->file('user_file');
    
                
                foreach ($request->event_file_path as $file) {
                    
                    $success_files = FileService::getFileManager()->uploadFile('request_event_confirmation/',$file);
    
                    if ($success_files == false) {
                        continue;
                    }
                    $requestcreate = new RequestCreateEventConfirmationFile();
                    $requestcreate->request_create_event_id = $event->id;
                    $requestcreate->file_path = $success_files['image_path'];
                    $requestcreate->save();
    
                
                }
            }
            return true;
        }
        
        return false ;
    }
    
    public function removeEventRequest(Request $request) {
        
        $request = RequestCreateEvent::find((int) $request->get('data')['request_id']);
        
        if ($request->delete()) {
            return true;
        }
        return false;

    }

    public function approveEventRequest(Request $request) {

        $request = RequestCreateEvent::find((int) $request->get('data')['request_id']);
        $request->status = "approved";

        if ($request->save()) {

            $event = new Event();
            $event->name = $request->name;
            $event->num_member = $request->num_member;
            $event->num_staff = 20;
            $event->budget = $request->budget;
            $event->date = $request->date;
            $event->location = $request->location;
            $event->description = $request->description;

            if ( $event->save() ) {
                

                // $pivot_status = $event->users()->attach($request->user_id, ['event_role' => "header"]);
                $pivot = new EventUser();
                $pivot->user_id = $request->user_id;
                $pivot->event_id = $event->id;
                $pivot->event_role = "header";

                if ( $pivot->save() ) {
                    return true;
                }

            }

        }
        
        return false;
         



    }

    public function denyEventRequest(Request $request) {

        $request = RequestCreateEvent::find((int) $request->get('data')['request_id']);
        $request->status = "denied";

        if ($request->save()) {
            return true;
        }
        return false;
    }

    public function requestjoinEventMember(Request $request ,Event $event){
        $requestjoin = new RequestJoinEvent();
        $requestjoin->user_id = Auth::getUser()->id;
        $requestjoin->event_id = $event->id;
        $requestjoin->role = 'member';
        $requestjoin->reason = $request->get('reason');
        if ($requestjoin->save()){
            if ($request->user_file != null) {
                // $files = $request->file('user_file');
    
                
                foreach ($request->user_file as $file) {
                    
                    $success_files = FileService::getFileManager()->uploadFile('usersjoin/',$file);
    
                    if ($success_files == false) {
                        continue;
                    }
                    $requestjoinfile = new RequestJoinEventFile();
                    $requestjoinfile->request_join_event_id = $requestjoin->id;
                    $requestjoinfile->file_path = $success_files['image_path'];
                    $requestjoinfile->save();
    
                
                }
            }
            return true;
        }
        
        return false ;

        
    }
    public function requestjoinEventStaff(Request $request ,Event $event){
        $requestjoin = new RequestJoinEvent();
        $requestjoin->user_id = Auth::getUser()->id;
        $requestjoin->event_id = $event->id;
        $requestjoin->role = 'staff';
        $requestjoin->reason = $request->get('reason');
        if ($requestjoin->save()){
            if ($request->user_file != null) {
                // $files = $request->file('user_file');
    
                
                foreach ($request->user_file as $file) {
                    
                    $success_files = FileService::getFileManager()->uploadFile('usersjoin/',$file);
    
                    if ($success_files == false) {
                        continue;
                    }
                    $requestjoinfile = new RequestJoinEventFile();
                    $requestjoinfile->request_join_event_id = $requestjoin->id;
                    $requestjoinfile->file_path = $success_files['image_path'];
                    $requestjoinfile->save();
    
                
                }
            }
            return true;
        }
        
        return false ;

        
    }


    


}