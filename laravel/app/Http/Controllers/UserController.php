<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Event;

class UserController extends Controller
{
    public function userPopEvent(){
        $events = Event::paginate(6);

        return view('user.main', [
            'events' => $events
        ]);
    }
    public function getMainEventPage(Event $event){
        return view('event.main.main', [
            'event' => $event
        ]);
    }
}
