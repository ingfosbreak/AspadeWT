<?php

namespace App\Managers;

use App\Models\Process;
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

    public function createProcess(Request $request) {
        
        $process = new Process();
        $process->event_id = (int) $request->data['event_id'];
        $process->name = $request->data['text'];    

        if ($process->save()) {
            return $process;
        }
        return false;
    }



    


}