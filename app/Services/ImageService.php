<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class ImageService extends BaseService
{
    public function storeFile($file, $path)
    {
        return Storage::putFile($path, $file);
    }
}
