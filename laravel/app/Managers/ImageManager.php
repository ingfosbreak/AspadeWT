<?php

namespace App\Managers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class ImageManager {

    public function __construct() {}

    public function uploadOneImage(string $path, $file) {
        
        if($file) {
            $image_name = $file->getClientOriginalName();
            $image_path = $path . $image_name;
            
            if (Storage::disk('public')->put($image_path, file_get_contents($file))) {
                return array(
                    'name' => $image_name,
                    'image_path' => $image_path,
                );
            }

            return false;
            
        }

        return false;
    }

    public function uploadMultipleImages(string $path, $files) {
        
        if($files) {

            $success_images = array();

            foreach($files as $file) {

                $image_name = $file->getClientOriginalName();
                $image_path = $path . $image_name;
    
                Storage::disk('public')->put($image_path, file_get_contents($file));

                array_push($success_images, array(
                    'name' => $image_name,
                    'image_path' => $image_path,
                ));
            }

            return $success_images;
        }

        return false;
    }

    


}