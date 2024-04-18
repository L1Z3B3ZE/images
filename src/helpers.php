<?php
namespace Images;

function upload_picture(string $path = '', array $images = [], string $imagepath = ''): Images
{
    return new Images($path, $images, $imagepath);
}