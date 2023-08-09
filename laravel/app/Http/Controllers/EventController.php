<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Event;

class EventController extends Controller
{
    public function getInfoEventPage(Event $event){
        return view('event.information', [
            'event' => $event
        ]);
    }

    public function getJoinEventFormPage(Event $event){
        return view('event.formJoinEvent', [
            'event' => $event
        ]);
    }
    public function getInfoEventPageFormMainEvent(Event $event){
        return view('event.main.information', [
            'event' => $event
        ]);
    }
    


    
}
