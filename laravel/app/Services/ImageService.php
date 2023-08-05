<?php

namespace App\Services;

use App\Managers\ImageManager;


class ImageService {


    private static $instance = null;


    private function __construct() {}
   

    /* Singleton Service */
    public static function getImageManager() {
      
      if (self::$instance == null)
      {
        self::$instance = new ImageManager();
      }
   
      return self::$instance;
    }


}