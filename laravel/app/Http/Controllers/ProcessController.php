<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Process;


class ProcessController extends Controller
{
    public function getProcessPage() {
        return view('test');

    }

    public function createProcess(Request $request) {
        return $request;
        // $process = new Process();
        // $process->event_id = $event_id;
        // $process->name = name;        
    }

    public function updateProcessStatus() {

    }
}
