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
        $process->event_id = (int) $request->get('data')['event_id'];
        $process->name = $request->get('data')['text'];    

        if ($process->save()) {
            return true;
        }
        return false;
    }

    public function editProcess(Request $request) {

        $process = Process::find( (int) $request->get('data')['process_id']);
        $process->name = $request->get('data')['text'];

        if ($process->save()) {
            return true;
        }
        return false;


    }

    public function updateProcess(Request $request) {

        $process = Process::find( (int) $request->get('data')['process_id']);
        $process->status = $request->get('data')['status'];

        if ($process->save()) {
            return true;
        }
        return false;


    }

    public function removeProcess(Request $request) {

        $process = Process::find( (int) $request->get('data')['process_id']);
        
        if ($process->delete()) {
            return true;
        }
        return false;

    }



    


}