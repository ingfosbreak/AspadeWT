<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\RequestCreateEvent;
use App\Models\Complaint;
use App\Models\Event;
use App\Models\User;
use App\Services\EventService;

class AdminController extends Controller
{

    public function getAdminMainPage() {
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
        $requests = Complaint::get();
        return view('admin.complaint',[
            'requests' => $requests
        ]);
    }

    public function getEventComplaintDetailPage(Event $event) {
        
        return view('admin.complaintDetail', [
            'event' => $event
        ]);

    }

    public function getEventComplaintDetailBehidePage(Event $event) {
        return view('admin.complaintDetailBehide', [
            'event' => $event
        ]);
   
    }

    public function approveEventRequest(Request $request) {
        
        $success = EventService::getEventManager()->approveEventRequest($request);
        if ($success != false) {
            return true;
        }

        return false;

    }
        
    public function denyEventRequest(Request $request) {

        $success = EventService::getEventManager()->denyEventRequest($request);
        if ($success != false) {
            return true;
        }

        return false;

    }


    public function removeEventRequest(Request $request) {

        $success = EventService::getEventManager()->removeEventRequest($request);
        if ($success != false) {
            return true;
        }

        return false;
    }

    public function approveReportRequest(Request $request) {

        $success = EventService::getEventManager()->approveReportRequest($request);
        if ($success != false) {
            return true;
        }

        return false;

    }

    public function denyReportRequest(Request $request) {

        $success = EventService::getEventManager()->denyReportRequest($request);
        if ($success != false) {
            return true;
        }

        return false;

    }

    public function removeReportRequest(Request $request) {

        $success = EventService::getEventManager()->removeReportRequest($request);
        if ($success != false) {
            return true;
        }

        return false;

    }
}
