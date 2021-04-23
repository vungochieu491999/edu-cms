<?php
namespace Edumad\Traits;

use Illuminate\Support\Facades\Storage;

Trait ImageTrait
{

    public function storageImageUpload($request, $fieldName, $folderName){
    dump($request->has($fieldName));
    dump($request->hasFile($fieldName));
        if ($request->has($fieldName)) {
            $file = $request->$fieldName;
            dd($file);
            $fileNameOrigin = $file->getClientOriginalName();
            dd($fileNameOrigin);
            $fileNameHash = date('D-m-yyyy') . '-' . str_random(10) . '.' . $file->getClientOriginalExtension();
            $filePath = $request->file($fieldName)->storeAs('public/' . $folderName . '/' . auth('members')->id(),
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
