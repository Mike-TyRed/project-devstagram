<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Image;

class ImageController extends Controller
{
    //
    public function store(Request $request)
    {
        $img = $request->file('file');

        $imageName = Str::uuid() . "." . $img->extension();

        //$imagenServidor = Image::make($img);

        return response()->json(['img' => $imageName]);
    }
}
