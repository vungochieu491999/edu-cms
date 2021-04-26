<?php
namespace Edumad\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

Trait ImageTrait
{

    public function storageImageUpload($request, $fieldName, $folderName){
        if ($request->has($fieldName)) {
            $file = $request->$fieldName;
            $fileNameOrigin = $file->getClientOriginalName();
            $fileNameHash = date('D-m-yyyy') . '-' . Str::random(10) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file($fieldName)->storeAs('public/' . $folderName . '/' . auth('web')->id(),
                $fileNameHash);
            $dataUploadTrait = [
                'file_name' => $fileNameOrigin,
                'file_path' => Storage::url($filePath)
            ];
            return $dataUploadTrait;
        }
        return null;
    }

}
