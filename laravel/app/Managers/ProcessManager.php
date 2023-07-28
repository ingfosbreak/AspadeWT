<?php

namespace App\Managers;

use App\Models\UserEntry;
use App\Models\Process;
use App\Models\ProcessUserEntry;
use App\Models\Event;

use Illuminate\Http\Request;


class ProcessManager {

    public function __construct() {}

    public function getAllProcess() {
        return Process::get();
    }

    public function getThatProcessOfEvent(string $id) {
        $event = Event::find((float)$id);
        return $event->processes;
    }

    


}