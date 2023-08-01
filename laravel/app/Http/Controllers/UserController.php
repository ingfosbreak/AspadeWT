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
        $events = Event::paginate(20);
        return view('user.main', [
            'events' => $events
        ]);
    }
    
}
