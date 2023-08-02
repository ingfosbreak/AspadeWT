<?php

namespace App\Managers;

use App\Models\Inform;

use Illuminate\Http\Request;


class InformManager {

    public function __construct() {}

    public function getAllInform() {
        return Inform::get();
    }

    public function createInform() {
        //
    }

    


}