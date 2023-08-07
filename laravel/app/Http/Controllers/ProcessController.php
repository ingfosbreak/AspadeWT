<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Process;
use App\Services\ProcessService;


class ProcessController extends Controller
{
    public function getProcessPage() {
        return view('test');

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
