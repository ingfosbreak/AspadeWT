<?php

namespace App\Managers;

use App\Models\Certificate;

use Illuminate\Http\Request;


class CertificateManager {

    public function __construct() {}

    public function getAllCertificate() {
        return Certificate::get();
    }

    public function createCertificate() {
        //
    }

    


}