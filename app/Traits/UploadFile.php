<?php

namespace App\Traits;

trait UploadFile
{
    public function uploadFile($imageFile, $path){
        $imageExt = $imageFile->getClientOriginalExtension();
        $fileName = time() . '.' . $imageExt;
        $imageFile->move($path, $fileName);
        return $fileName;
        }
}
