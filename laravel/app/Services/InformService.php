<?php

namespace App\Services;

use App\Managers\InformManager;


class InformService {


    private static $instance = null;


    private function __construct() {}
   

    /* Singleton Service */
    public static function getInformManager() {
      
      if (self::$instance == null)
      {
        self::$instance = new InformManager();
      }
   
      return self::$instance;
    }


}