<?php
namespace Images;
class Images{
    public function uploadImage($path, $images, $imagepath): bool|string
    {
        if(move_uploaded_file($images['img']['tmp_name'], $path . $imagepath)){
            return $imagepath;
        }else{
            return false;        }
    }
}