<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Event;
use App\Models\EventUser;

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
        return view('event.main.main', [
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
    
}
