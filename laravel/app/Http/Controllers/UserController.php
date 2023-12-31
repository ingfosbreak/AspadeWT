<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Services\NotifyService;
use Illuminate\View\View;
use App\Models\Event;
use App\Models\EventUser;
use App\Models\UserNoti;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function userPopEvent(){
        $eventsNew = Event::getNewEvent()->take(6);
        $eventsPopular = Event::getPopular()->take(6);
        $eventUpComing = Event::getUpComingEvent()->take(6);
                return view('user.main', [
                    'eventsNew' => $eventsNew ,
                    'eventsPopular' => $eventsPopular,
                    'eventUpComing' => $eventUpComing
                ]);

    }

    public function userViewAllNewEvents(){

        $events = Event::getNewEvent();

                return view('user.viewAll', [
                    'events' => $events
                ]);
    }
    public function userViewAllUpComingEvent(){
        $events = Event::getUpComingEvent();
                return view('user.viewAll', [
                    'events' => $events
                ]);

    }


   
    public function getMainEventPage(Event $event){
        $announcements = $event->event_announcement->sortByDesc('created_at');
        return view('event.main.main', [
            'announcements' => $announcements,
            'event' => $event
        ]);
    }
    public function getViewAllPage(){
        // $events = Event::getPublishEventPaginate();
        $events = Event::get();

        return view('user.viewAll', [
            'events' => $events
        ]);
    }
    public function getEventInProgress(){
        $events = Auth::getUser()->getEventInProgress();
        return view('user.myEventHistory', [
            'events' => $events
        ]);
    }
    public function getEventSuccess(){
        $events = Auth::getUser()->getEventSuccess();
        return view('user.myEventHistory', [
            'events' => $events
        ]);
    }
    public function getEventAll(){
        $events = Auth::getUser()->events;
        return view('user.myEventHistory', [
            'events' => $events
        ]);
    }
    public function getEventHeader(){
        $events = Auth::getUser()->user_pivots;
        return view('user.myOwnEvent', [
            'events' => $events
        ]);
    }
    public function getNotify(){
        $notifies = Auth::getUser()->noti->sortByDesc('created_at');
        return view('user.notify', [
            'notifies' => $notifies
        ]);
    }
    public function removeNotify(Request $request){
        $request->validate(['data' => 'required']);
        $success = NotifyService::getNotifyManager()->removeNotify($request);
        if ($success != false) {
            return true;
        }

        return false;
    }
    public function getCertificatePage(Event $event){
        return view('user.certificate', [
            'event' => $event
        ]);
    }

    
}
