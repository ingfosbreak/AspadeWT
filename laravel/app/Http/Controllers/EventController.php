<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Services\EventService;
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
    

    // Event
    public function editPublistEvent(Request $request) {
        
        $success = EventService::getEventManager()->editPublistEvent($request);
        if ($success != false) {
            return true;
        }
        
        return false;
    }

    // EventInfo

    public function createEventInfo(Request $request) {
        
        $success = EventService::getEventManager()->createEventInfo($request);
        if ($success != false) {
            return true;
        }
        
        return false;
    }

    public function editEventInfo(Request $request) {

        $success = EventService::getEventManager()->editEventInfo($request);
        if ($success != false) {
            return true;
        }

        return false;

    }

    public function updatePosEventInfo(Request $request) {

        $success = EventService::getEventManager()->editOrderInfo($request);
        if ($success != false) {
            return true;
        }

        return false;


    }

    public function editTypeEventInfo(Request $request) {

        $success = EventService::getEventManager()->editTypeInfo($request);
        if ($success != false) {
            return true;
        }

        return false;


    }

    public function removeEventInfo(Request $request) {

        $success = EventService::getEventManager()->removeEventInfo($request);
        if ($success != false) {
            return true;
        }

        return false;


    }

    
}
