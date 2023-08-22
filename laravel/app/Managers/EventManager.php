<?php

namespace App\Managers;


use App\Models\Event;
use App\Models\EventInfo;
use App\Models\EventUser;
use App\Models\EventTeam;
use App\Models\EventImage;
use App\Models\EventCategoryList;
use App\Models\Complaint;
use App\Models\Certificate;
use App\Models\Process;
use App\Models\EventAnnouncement;
use App\Models\RequestJoinEvent;
use App\Models\RequestJoinEventFile;
use App\Models\RequestCreateEvent;
use App\Models\RequestCreateEventConfirmationFile;
use App\Services\FileService;
use App\Services\CertificateService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ItemNotFoundException;
use App\Services\NotifyService;
use Illuminate\Http\Request;




class EventManager {

    public function __construct() {}

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
            
            $event_info = new EventInfo();
            $event_info->event_id = (int) $request->get('data')['event_id'];
            $event_info->order = 1000;

            if ($event_info->save()) {
                return true;
            }
            return false;
              
        }

        $maxValue = EventInfo::max('order');

        $event_info = new EventInfo();
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
        $event->date_register = $request->get('date_register');
        $event->date_start = $request->get('date_start');
        $event->date_close = $request->get('date_close');
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

            NotifyService::getNotifyManager()->userNoti(Auth::getUser()->id, 
            'noti', 
            "Your Event Create Request ID : ". $event->id . " Has been sent to Admin", 
            "I hope You will make a Wonderful Event!!! 👍");

            return true;
        }
        
        return false ;
    }
    
    public function removeEventRequest(Request $request) {
        
        $request = RequestCreateEvent::find((int) $request->get('data')['request_id']);
        $user_id = $request->user_id;
        $request_id = $request->id;

        if ($request->delete()) {

            NotifyService::getNotifyManager()->userNoti($user_id, 
            'noti', 
            "Event Request id : ". $request_id . " Has been deleted by Admin", 
            "We are so sorry to hear about that 😢");

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
            $event->num_staff = $request->num_staff;
            $event->category = $request->category;
            $event->budget = $request->budget;
            $event->date_register = $request->date_register;
            $event->date_start = $request->date_start;
            $event->date_close = $request->date_close;
            $event->location = $request->location;
            $event->description = $request->description;

            if ( $event->save() ) {
                

                // $pivot_status = $event->users()->attach($request->user_id, ['event_role' => "header"]);
                $pivot = new EventUser();
                $pivot->user_id = $request->user_id;
                $pivot->event_id = $event->id;
                $pivot->event_role = "header";

                if ( $pivot->save() ) {

                    NotifyService::getNotifyManager()->userNoti($request->user_id, 
                    'noti', 
                    "Event Request id : ". $request->id . " Has been approved by Admin", 
                    "Congratulation On Your New Journey!!! 😊");

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

            NotifyService::getNotifyManager()->userNoti($request->user_id, 
            'noti', 
            "Event Request id : ". $request->id . " Has been denied by Admin", 
            "We are so sorry to hear about that 😢");

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

            NotifyService::getNotifyManager()->userNoti($requestjoin->user_id, 
            'noti', 
            "Event join as a participant id : ". $requestjoin->id . " Has been sent to Event", 
            "I hope You will make a Good Ride with the team!!! 👍");

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

            NotifyService::getNotifyManager()->userNoti($requestjoin->user_id, 
            'noti', 
            "Event join as a staff id : ". $requestjoin->id . " Has been sent to Event", 
            "I hope You will make a Good Ride with the team!!! 👍");

            return true;
        }
        
        return false ;

        
    }

    public function approveJoinRequest(Request $request) {
        $requestjoin = RequestJoinEvent::find((int) $request->get('data')['request_id']);
        $requestjoin->status = "approved";

        if ($requestjoin->save()) {
                
            // $pivot_status = $event->users()->attach($request->user_id, ['event_role' => "header"]);
            $pivot = new EventUser();
            $pivot->user_id = $requestjoin->user_id;
            $pivot->event_id = $requestjoin->event_id;
            // 'staff','member'

            if ($request->get('data')['role'] == "staff") {
                $pivot->event_role = "staff";
            }

            if ($request->get('data')['role'] == "member") {
                $pivot->event_role = "participant";
            }

            if ( $pivot->save() ) {
                
                NotifyService::getNotifyManager()->userNoti($requestjoin->user_id, 
                'noti', 
                "Event join id : ". $requestjoin->id . " Has been approved by Event", 
                "Congratulation On Your New Journey!!! 😊");

                return true;
            }

        }
        
        return false;

    }

    public function denyJoinRequest(Request $request) {

        $requestjoin = RequestJoinEvent::find((int) $request->get('data')['request_id']);
        $requestjoin->status = "denied";
        
        if ($requestjoin->save()) {

            NotifyService::getNotifyManager()->userNoti($requestjoin->user_id, 
            'noti', 
            "Event Request id : ". $requestjoin->id . " Has been denied by Event", 
            "We are so sorry to hear about that 😢");

            return true;
        }
        return false;


    }

    public function removeJoinRequest(Request $request) {
        $request = RequestJoinEvent::find((int) $request->get('data')['request_id']);
        $user_id = $request->user_id;
        $request_id = $request->id;
        
        if ($request->delete()) {

            NotifyService::getNotifyManager()->userNoti($user_id, 
            'noti', 
            "Event Request id : ". $request_id . " Has been denied by Event", 
            "We are so sorry to hear about that 😢");

            return true;
        }
        return false;
    }




    // team

    public function addEventTeam(Request $request) {

        $event_team = new EventTeam();
        $event_team->event_id = (int) $request->get('data')['event_id'];
        $event_team->name = $request->get('data')['text'];

        if ($event_team->save()) {

             
            NotifyService::getNotifyManager()->eventNoti($event_team->event_id, 
            'noti', 
            "Event Team name : ". $event_team->name . " Has been added by Event", 
            "Why don't you join this team 😊");


            return true;
        }
        return false;

    }

    public function editEventTeam(Request $request) {

        $event_team = EventTeam::find((int) $request->get('data')['team_id']);
        $event_team->name = $request->get('data')['text'];

        if ($event_team->save()) {

            NotifyService::getNotifyManager()->eventNoti($event_team->event_id, 
            'noti', 
            "Event Team name : ". $event_team->name . " Has been edited by Event", 
            "Do you like the new Team 😊");

            return true;
        }
        return false;
       

    }


    public function removeEventTeam(Request $request) {

        $event_team = EventTeam::find((int) $request->get('data')['team_id']);
        $event_team_event_id = $event_team->event_id;
        $event_team_name = $event_team->name;
        
        $team_members = EventUser::get()->where('event_team_id',$event_team->id);

        foreach($team_members as $member) {
            $member->event_team_id = null;
            $member->save();
        }

        if ($event_team->delete()) {


            NotifyService::getNotifyManager()->eventNoti($event_team_event_id, 
            'noti', 
            "Event Team name : ". $event_team_name . " Has been removed by Event", 
            "See if You are in this Team? 🥹");


            return true;

        }
        return false;

    }

  
    public function changeUserTeam(Request $request) {
        
        $event_user = EventUser::where('event_id',(int) $request->get('data')['event_id'])->where('user_id',(int) $request->get('data')['user_id'])->firstOrFail();
        // $event_user = EventUser::get()->where('event_id',(int) $request->get('data')['event_id'])->where('user_id',(int) $request->get('data')['user_id'])[0];
        if ($request->get('data')['team_id'] == null) {
            $event_user->event_team_id = null;    
            
            if ($event_user->save()) {

                NotifyService::getNotifyManager()->userNoti($event_user->user_id, 
                'noti', 
                "You have been kicked from  Team in Event: ". $event_user->event->name , 
                "We are Sorry to hear about that 🥹");

                return true;
            }
            return false;
            
        }

        $event_user->event_team_id = (int) $request->get('data')['team_id'];
        
        if ($event_user->save()) {

            NotifyService::getNotifyManager()->userNoti($event_user->user_id, 
                'noti', 
                "You have been assigned to Team in Event: ". $event_user->event->name , 
                "Keep up the good work buddy 🥰");
            return true;
        }
        return false;
        // where('event_id',(int) $event_id)
        // 'event_id':eventId,'team_id':teamId,'user_id':userId
        // $pivot = EventUser::where('event_id');
        // $pivot->user_id = $request->user_id;
        // $pivot->event_id = $event->id;
        // $pivot->event_role = "header";


    }

    public function editImage(Request $request, Event $event) {
        // event_image
        if ($event->event_image == null) {
            
            
            if ( $request->image != null ) {
                
                $file = $request->file('image');
                $success_image = FileService::getFileManager()->uploadFile('event_images/',$file);
                
                if ($success_image == false) {
                    return false;
                }
                
                $eventImage = new EventImage();
                $eventImage->event_id = $event->id;
                $eventImage->name = $success_image['name'];
                $eventImage->image_path = $success_image['image_path'];

                if ($eventImage->save()){
                    return true;
                }
            }

            return false;

        }

        $file = $request->file('image');
        $success_image = FileService::getFileManager()->uploadFile('event_images/',$file);
                
        if ($success_image == false) {
            return false;
        }

        $eventImage = $event->event_image;
        $eventImage->name = $success_image['name'];
        $eventImage->image_path = $success_image['image_path'];

        return $eventImage->save();
    }
    

    public function editEventInformation(Request $request, Event $event) {
        

        $event->name = $request->get('name');
        $event->num_member = $request->get('num_member');
        $event->num_staff = $request->get('num_staff');
        $event->budget = $request->get('budget');
        $event->category = $request->get('category');
        $event->date_register = $request->get('date_register');
        $event->date_start = $request->get('date_start');
        $event->date_close = $request->get('date_close');
        $event->location = $request->get('location');

        if ($request->get('description') != null){
            $event->description = $request->get('description');
        }
        
        if ($event->save()){
            return true;
        }

        return false;
    }


    public function createAn(Request $request, Event $event) {

        $announce = new EventAnnouncement();
        $announce->event_id = $event->id;
        $announce->title = $request->get('title');
        $announce->detail = $request->get('detail');
        $announce->type = $request->get('type');

        if ($announce->save()){
            return true;
        }

        return false;
    
    }

    public function removeAn(Request $request) {

        $announce = EventAnnouncement::find((int) $request->get('data')['announce_id']);
        
        if ($announce->delete()) {
            return true;
        }
        return false;


    }

    public function editAn(Request $request, EventAnnouncement $announce) {
        
        $announce->title = $request->get('title');
        $announce->detail = $request->get('detail');
        
        if ($announce->save()){
            return true;
        }

        return false;

    
    }

   

    // public function approveReportRequest(Request $request) {
    //     $complaint = Complaint::find((int) $request->get('data')['request_id']);
    //     $complaint->status = "approved";


    //     //remove member of event
    //     $team_members = EventUser::get()->where('event_id',$complaint->event_id);


    //     foreach($team_members as $member) {
    //         NotifyService::getNotifyManager()->userNoti($member->user_id, 
    //         'noti', 
    //         "Event name : ". $complaint->event->name . "Has been removed by Admin", 
    //         "Your request to join has been removed too xd 🥹");

    //         $member->delete();
    //     }

    //     //remove Team
    //     $teams = EventTeam::get()->where('event_id',$complaint->event_id);

    //     foreach($teams as $team) {
    //         $team->delete();
    //     }

    //     //remove Info
    //     $infos = EventInfo::get()->where('event_id',$complaint->event_id);

    //     foreach($infos as $info) {
    //         $info->delete();
    //     }

    //     //remove Image
    //     $images = EventImage::get()->where('event_id',$complaint->event_id);

    //     foreach($images as $image) {
    //         $image->delete();
    //     }

    //     //remove Announcement
    //     $announces = EventAnnouncement::get()->where('event_id',$complaint->event_id);

    //     foreach($announces as $announce) {
    //         $announce->delete();
    //     }

    //     //remove certificates
    //     $certificate = Certificate::get()->where('event_id',$complaint->event_id);

    //     foreach($certificate as $certi) {
    //         $certi->delete();
    //     }

    //     //catefory lists
    //     $category_lists = EventCategoryList::get()->where('event_id',$complaint->event_id);

    //     foreach($category_lists as $cate) {
    //         $cate->delete();
    //     }

    //     //process
    //     $process = Process::get()->where('event_id',$complaint->event_id);

    //     foreach($process as $pro) {
    //         $pro->delete();
    //     }

    //     //request join 
    //     $joins = RequestJoinEvent::get()->where('event_id',$complaint->event_id);

    //     foreach($joins as $join) {
    //         $join->delete();
    //     }


    //     //remove event
    //     $event = Event::find($complaint->event_id);
    //     $usernoti = $complaint->user_id;
    //     $namenoti = $complaint->name;
    //     $eventid = $complaint->event_id;
        
    //     if ($complaint->delete()) {

    //         //remove complaint 
    //         $complaints = Complaint::get()->where('event_id',$eventid);

    //         foreach ($complaints as $complaint) {
    //             $complaint->delete();
    //         }

    //         $event->delete();

    //         NotifyService::getNotifyManager()->userNoti($usernoti, 
    //         'noti', 
    //         "Report Event name : ". $namenoti . "  request Has been approved by Admin", 
    //         "Your request has been approved 👌");

    //         return true;
    //     }

    //     return false;
    // }

    public function approveReportRequest(Request $request) {
        $complaint = Complaint::find((int) $request->get('data')['request_id']);
        $complaint->status = "approved";
    
        $event_id = $complaint->event_id;
    
        $relatedModels = [
            EventUser::class,
            EventTeam::class,
            EventInfo::class,
            EventImage::class,
            EventAnnouncement::class,
            Certificate::class,
            EventCategoryList::class,
            Process::class,
            RequestJoinEvent::class,
        ];
    
        foreach ($relatedModels as $relatedModel) {
            $items = $relatedModel::where('event_id', $event_id)->get();
            foreach ($items as $item) {
                $item->delete();
            }
        }
    
        $event = Event::find($event_id);
        $usernoti = $complaint->user_id;
        $namenoti = $complaint->name;
    
        if ($complaint->delete()) {
            $complaints = Complaint::where('event_id', $event_id)->get();
            foreach ($complaints as $complaint) {
                $complaint->delete();
            }
    
            $event->delete();
    
            NotifyService::getNotifyManager()->userNoti(
                $usernoti, 
                'noti', 
                "Report Event name : ". $namenoti . "  request Has been approved by Admin", 
                "Your request has been approved 👌"
            );
    
            return true;
        }
    
        return false;
    }
    

    public function denyReportRequest(Request $request) {
        $complaint = Complaint::find((int) $request->get('data')['request_id']);
        $complaint->status = "denied";

        if ($complaint->save()) {

            NotifyService::getNotifyManager()->userNoti($complaint->user_id, 
            'noti', 
            "Report Event name : ". $complaint->name . "  request Has been denied by Admin", 
            "Your request has been denied 🙅");
            
            return true;
        }

        return false;
    }

    public function removeReportRequest(Request $request) {

        $complaint = Complaint::find((int) $request->get('data')['request_id']);
        $complaint_id = $complaint->user_id;
        $complaint_name = $complaint->name;
        
        
        if ($complaint->delete()) {


            NotifyService::getNotifyManager()->userNoti($complaint_id, 
            'noti', 
            "Report Event name : ". $complaint_name . "  request Has been removed by Admin", 
            "Your request has been removed xd 🥹");


            return true;

        }
        return false;
    
    }

    public function finishEvent(Request $request) {

        $event = Event::find((int) $request->get('data')['event_id']);
        $event->status = "finished";

        if ($event->save()) {

            foreach($event->users as $user) {
                
                
                NotifyService::getNotifyManager()->userNoti($user->id, 
                'noti', 
                "Event name : ". $event->name . " Has been declared victory by Event Team", 
                "How was your journey do you miss it already? 🥹");
        
                    
                
            }

            CertificateService::getCertificateManager()->createCertificate($event);


            NotifyService::getNotifyManager()->eventNoti($event->id, 
            'noti', 
            "To all precious members of our Wonderful Event, We won!!", 
            "I hope you guys will have a great future 😊");

            return true;


        }

        return false;


    }

}