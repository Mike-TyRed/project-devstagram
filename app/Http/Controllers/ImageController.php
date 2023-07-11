<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    //
    public function store(Request $request)
    {
        //validar
        $img = $request->file('file');
        //genera un id unico para cada imagen
        $imageName = Str::uuid() . "." . $img->extension();
        //guardar imagen en el servidor
        $imagenServidor = Image::make($img);
        //redimensionar imagen
        $imagenServidor->fit(1000, 1000);
        //definir la ruta donde se guardara la imagen
        $imagenPath = public_path('uploads') . '/' . $imageName;
        //guardar imagen en el servidor
        $imagenServidor->save($imagenPath);

        //guardar imagen en el servidor
        return response()->json(['image' => $imageName]);
    }
}
