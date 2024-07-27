<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class FileController extends Controller
{
    public function showThumbnail($filename)
    {
        $path = 'public/classwork_files/thumbnails/' . $filename;
        
        if (Storage::exists($path)) {
            $file = Storage::get($path);
            $type = Storage::mimeType($path);

            return response($file, 200)->header("Content-Type", $type);
        }

        return response('File not found', 404);
    }
}