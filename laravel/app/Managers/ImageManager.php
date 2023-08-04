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
 
            return Storage::disk('public')->put($image_path, file_get_contents($file));
            
        }
    }

    public function uploadMultipleImages(string $path, $file) {
        
        if($file) {
            $image_name = $file->getClientOriginalName();
            $image_path = $path . $image_name;
 
            return Storage::disk('public')->put($image_path, file_get_contents($file));
            
        }
    }
    


}