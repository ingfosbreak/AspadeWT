<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\RequestCreateEvent;
use App\Services\EventService;

class AdminController extends Controller
{

    public function getAdminMainPage() {
        return view('admin.main');
    }

    public function getAdminDashboardPage(){
        return view('admin.dashboard');
    }

    public function getEventRequestPage() {
        $requests = RequestCreateEvent::paginate(10);
        return view('admin.request', [
            'requests' => $requests
        ]);
    }

    public function getEventRequestDetailPage(RequestCreateEvent $request){
        return view('admin.requestDetail', [
            'request' => $request
        ]);
    }

    public function getEventComplaintPage() {
        return view('admin.complaint');
    }
        


    public function removeEventRequest(Request $request) {

        $success = EventService::getEventManager()->removeEventRequest($request);
        if ($success != false) {
            return true;
        }

        return false;
    }
}
