<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Services\EventService;
use App\Services\NotifyService;
use App\Models\Event;
use App\Models\EventAnnouncement;
use App\Models\RequestJoinEvent;
use Illuminate\Support\Facades\Gate;

class EventController extends Controller
{
    public function getInfoEventPage(Event $event){
        
        Gate::authorize('viewAny', $event);

        return view('event.information', [
            'event' => $event
        ]);
    }

    public function getJoinEventFormPage(Event $event){

        Gate::authorize('viewAny', $event);

        return view('event.formJoinEvent', [
            'event' => $event
        ]);
    }
    public function getJoinStaffEventFormPage(Event $event){

        Gate::authorize('viewAny', $event);

        return view('event.formJoinStaffEvent', [
            'event' => $event
        ]);
    }
    public function getInfoEventPageFormMainEvent(Event $event){

        Gate::authorize('viewAny', $event);
        
        return view('event.main.information', [
            'event' => $event
        ]);
    }
    

    // Event
    public function editPublistEvent(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->editPublistEvent($request);
        if ($success != false) {
            return true;
        }
        
        return false;
    }

    //requestCreateEvent
    public function requestCreateEvent(Request $request) {

        $request->validate([
            'name' => ['required', 'string', 'min:1', 'max:1000','unique:'.Event::class],
            'num_member' => ['required', 'integer','min:1','max:100000'],
            'num_staff' => ['required', 'integer','min:0' ,'max:1000'],
            'budget' => ['required', 'integer', 'max:100000000'],
            'category' => ['required', 'string'],
            'date_start'  =>  'required|date',
            'date_register' => 'required|date|before_or_equal:date_start',
            'date_close'    =>  'required|date|after_or_equal:date_start',
            'location' => ['required', 'string', 'min:1', 'max:1000'],
            'description' => ['required', 'string', 'min:1', 'max:2000']
        ]);
        
        $success = EventService::getEventManager()->requestCreateEvent($request);
        if ($success != false) {
            
            return redirect()->route('user.main')->with('success','create success');
        }
        
        return false;
    }

    //requestjoinEventMember
    public function requestjoinEventMember(Request $request ,Event $event) {

        $request->validate(['reason' => 'required|string|min:1|max:200']);
            
        $success = EventService::getEventManager()->requestjoinEventMember($request,$event);
        if ($success != false) {
            return redirect()->route('user.main')->with('success','create success');
        }
        return false;
    }
    //requestjoinEventStaff
    public function requestjoinEventStaff(Request $request ,Event $event) {     
    
        $request->validate(['reason' => 'required|string|min:1|max:200']);
        
        $success = EventService::getEventManager()->requestjoinEventStaff($request,$event);
        if ($success != false) {
            return redirect()->route('user.main')->with('success','create success');
        }
        
        return false;
    }




    // EventInfo

    public function createEventInfo(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->createEventInfo($request);
        if ($success != false) {
            return true;
        }
        
        return false;
    }

    public function editEventInfo(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->editEventInfo($request);
        if ($success != false) {
            return true;
        }

        return false;

    }

    public function updatePosEventInfo(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->editOrderInfo($request);
        if ($success != false) {
            return true;
        }

        return false;


    }
    public function editTypeEventInfo(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->editTypeInfo($request);
        if ($success != false) {
            return true;
        }

        return false;


    }

    public function removeEventInfo(Request $request) {

        $request->validate(['data' => 'required']);

        $success = EventService::getEventManager()->removeEventInfo($request);
        if ($success != false) {
            return true;
        }

        return false;


    }



    // staff

    public function getEventMembersPage(Event $event) {
        return view('event.main.member', [
            'event' => $event
        ]);
    }

    public function getEventTeamsPage(Event $event) {
        return view('event.main.team', [
            'event' => $event
        ]);
    }

    public function getEventJoinsPage(Event $event) {
        return view('event.main.joinEvent', [
            'event' => $event
        ]);
    }

    public function getEventJoinDetailPage(Event $event, RequestJoinEvent $request) {
        return view('event.main.joinEventDetail',[
            'event' => $event,
            'request' => $request
        ]);
    }

    public function addEventTeam(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->addEventTeam($request);
        if ($success != false) {
            return true;
        }
        
        return false;

    }

    public function removeEventTeam(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->removeEventTeam($request);
        if ($success != false) {
            return true;
        }
        
        return false;

    }

    public function editEventTeam(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->editEventTeam($request);
        if ($success != false) {
            return true;
        }
        
        return false;

    }

    public function editMemberTeam(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->changeUserTeam($request);
        if ($success != false) {
            return true;
        }
        
        return false;
    }

    public function kickMemberTeam(Request $request) {

        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->kickMemberTeam($request);
        if ($success != false) {
            return true;
        }
        
        return false;
    } 
    

    public function approveJoinRequest(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->approveJoinRequest($request);
        if ($success != false) {
            return true;
        }
        
        return false;
    
    }

    public function denyJoinRequest(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->denyJoinRequest($request);
        if ($success != false) {
            return true;
        }
        
        return false;

    }

    public function removeJoinRequest(Request $request) {
        
        $request->validate(['data' => 'required']);
        
        $success = EventService::getEventManager()->removeJoinRequest($request);
        if ($success != false) {
            return true;
        }
        
        return false;

    }

    public function editImage(Request $request, Event $event) {
       
        $request->validate([
            'image' => 'required',
        ]);
        
        $status = EventService::getEventManager()->editImage($request,$event);
            
        if ($status) {
            
            return redirect()->back()->with('success.image', 'ProfileImage updated');
        
        }
            
        return redirect()->back()->with('error.image', 'failed to update');

        

    }

    public function editEventInformation(Request $request, Event $event) {

        $request->validate([
            'name' => ['required', 'string', 'min:1', 'max:1000'],
            'num_member' => ['required', 'integer','min:1','max:100000'],
            'num_staff' => ['required', 'integer','min:0' ,'max:1000'],
            'budget' => ['required', 'integer', 'max:100000000'],
            'category' => ['required', 'string'],
            'date_start'  =>  'required|date',
            'date_register' => 'required|date|before_or_equal:date_start',
            'date_close'    =>  'required|date|after_or_equal:date_start',
            'location' => ['required', 'string', 'min:1', 'max:1000'],
            'description' => ['required', 'string', 'min:1', 'max:2000']
        ]);
        
        $success = EventService::getEventManager()->editEventInformation($request,$event);
        if ($success != false) {
            return redirect()->route('event.information',['event'=>$event])->with('success', 'EventUpdate');
        }
        
        return redirect()->back()->with('error.image', 'failed to update');

    }


    public function createAn(Request $request, Event $event) {
        
        $request->validate([
            'title' => ['required', 'string', 'max:200'],
            'detail' => ['required', 'string', 'max:200']
        ]);
        
        $success = EventService::getEventManager()->createAn($request,$event);
        if ($success != false) {
            return redirect()->route('event.main.main',['event'=> $event])->with('success', 'AnCreate');
        }
        
        return redirect()->back()->with('error.image', 'failed to update');
    }


    public function removeAn(Request $request) {
        
        $request->validate(['data' => 'required']);
       
        $success = EventService::getEventManager()->removeAn($request);
        if ($success != false) {
            return true;
        }
        
        return false;
    }


    public function editAn(Request $request, EventAnnouncement $announce, Event $event) {
        
        $request->validate([
            'title' => ['required', 'string', 'max:200'],
            'detail' => ['required', 'string', 'max:200']
        ]);
        
        $success = EventService::getEventManager()->editAn($request,$announce);
        if ($success != false) {
            return redirect()->route('event.main.main',['event'=> $event])->with('success', 'AnCreate');
        }
        
        return redirect()->back()->with('error.image', 'failed to update');
    }
    

    public function reportEvent(Request $request) {
        
        $request->validate([
            'name' => ['required', 'string', 'max:200'],
            'description' => ['required', 'string', 'max:200']
        ]);
        
        $success = NotifyService::getNotifyManager()->reportEvent($request);

        if ($success) {
            return redirect()->back()->with('success.image', 'Report success');
        }
        
        return redirect()->back()->with('error.image', 'failed to update');
    }

    public function finishEvent(Request $request) {
        
        $request->validate(['data' => 'required']);

        $success = EventService::getEventManager()->finishEvent($request);
        if ($success != false) {
            return true;
        }
        
        return false;


    }
    public function getCategorypage(String $category){
        $events = Event::where('category',$category)->paginate(15);
        return view('user.viewAll',['events'=> $events]);
    }

}
