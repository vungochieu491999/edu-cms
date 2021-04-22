<?php
namespace Edumad\Traits;

use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

Trait ImageTrait
{

    public function storageImage($image = null){
            if ($image){
                $extension = $image->getClientOriginalExtension();
                Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
            }
    }

}
