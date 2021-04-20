<?php
namespace Edumad\Traits;

use Illuminate\Http\Client\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

Trait ImageTrait
{

    public function storageImage(Request $request){
        $image_path = $request->input('image_link');
        if(File::exists($image_path)){
        }

    }

    public function deleteImgate($path_file = ''){
        if(Storage::exists($path_file)) {
            File::delete($path_file);
        } else {
        }
        if(File::exists($path_file)){
            File::delete($path_file);
        }
    }

}
