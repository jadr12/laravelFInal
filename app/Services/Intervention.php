<?php
namespace App\Services;

use Storage;
use Image;


class Intervention {

    public function imgresize($disk, $x, $y, $image){

        $name = $image->store('', $disk);
        $path = Storage::disk($disk)->path($name);
        $img  = Image::make($path)->resize($x, $y)->save();
    
        return $name;
    }

}