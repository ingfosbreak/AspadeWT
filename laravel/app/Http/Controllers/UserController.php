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
        // $events = Event::getPublishEventPaginate();
        $events = Event::paginate(6);

        return view('user.main', [
            'events' => $events
        ]);
    }
    public function userPopEventStaff(){
        // $events = Event::getPublishEventPaginate();
        $events = Event::paginate(15);

        return view('user.mainStaff', [
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
