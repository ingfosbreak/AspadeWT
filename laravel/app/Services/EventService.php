<?php

namespace App\Services;

use App\Managers\EventManager;


class EventService {


    private static $instance = null;


    private function __construct() {}
   

    /* Singleton Service */
    public static function getEventManager() {
      
      if (self::$instance == null)
      {
        self::$instance = new EventManager();
      }
   
      return self::$instance;
    }


}