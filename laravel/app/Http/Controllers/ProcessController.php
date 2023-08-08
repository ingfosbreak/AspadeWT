<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Process;
use App\Services\ProcessService;
use App\Models\Event;


class ProcessController extends Controller
{


    public function getEventKanbanPage(Event $event) {
        return view('event.kanban',['event' => $event]);
    }

    public function createProcess(Request $request) {
        
        $success = ProcessService::getProcessManager()->createProcess($request);
        if ($success != false) {
            return true;
        }
        
        return false;
        
    }

    public function editProcess(Request $request) {
    
        $success = ProcessService::getProcessManager()->editProcess($request);
        if ($success != false) {
            return true;
        }

        return false;

    }

    public function updateProcess(Request $request) {

        $success = ProcessService::getProcessManager()->updateProcess($request);
        if ($success != false) {
            return true;
        }

        return false;
    }
    
    public function removeProcess(Request $request) {

        $success = ProcessService::getProcessManager()->removeProcess($request);
        if ($success != false) {
            return true;
        }

        return true;
    }

}
