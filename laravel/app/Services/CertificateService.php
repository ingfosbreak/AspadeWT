<?php

namespace App\Services;

use App\Managers\CertificateManager;


class CertificateService {


    private static $instance = null;


    private function __construct() {}
   

    /* Singleton Service */
    public static function getCertificateManager() {
      
      if (self::$instance == null)
      {
        self::$instance = new CertificateManager();
      }
   
      return self::$instance;
    }


}