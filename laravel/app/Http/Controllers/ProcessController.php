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

    public function updateProcessStatus() {

    }
}
