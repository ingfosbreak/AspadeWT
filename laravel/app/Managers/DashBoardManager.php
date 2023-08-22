<?php

namespace App\Managers;

use App\Models\Complaint;
use App\Models\User;
use App\Models\Process;
use App\Models\RequestCreateEvent;
use Carbon\Carbon;
use Illuminate\Http\Request;


class DashboardManager {

    public function __construct() {}

    public function getTime() {
        return Carbon::today()->toFormattedDateString();
    }

    public function AllEvents() {
        return RequestCreateEvent::get()->count();
    }

    public function AllUsers() {
        return User::get()->count();
    }

    public function AllComplaints() {
        return Complaint::get()->count();
    }

    public function AllProcesses() {
        return Process::get()->count();
    }
    

    


}