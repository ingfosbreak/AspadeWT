<?php

namespace App\Managers;



use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class FileManager {

    public function __construct() {}

    public function uploadFile(string $path, $file) {
        
        if($file) {
            $image_name = Carbon::now() . $file->getClientOriginalName();
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

    public function uploadMultipleFiles(string $path, $files) {
        
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