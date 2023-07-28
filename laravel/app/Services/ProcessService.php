<?php

namespace App\Services;

use App\Managers\ProcessManagers;


class ProcessService {


    private static $instance = null;


    private function __construct() {}
   

    /* Singleton Service */
    public static function getProcessManager() {
      
      if (self::$instance == null)
      {
        self::$instance = new ProcessManager();
      }
   
      return self::$instance;
      
    }


}