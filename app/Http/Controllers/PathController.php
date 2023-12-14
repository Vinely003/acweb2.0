<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class PathController extends Controller
{
    public function imagePath($imageName)
    {
        $filePath = public_path('image/' . $imageName);

        if (!File::exists($filePath)) {
            abort(404);
        }

        return response(File::get($filePath))->header('Content-Type', 'image/*');
    }
}
