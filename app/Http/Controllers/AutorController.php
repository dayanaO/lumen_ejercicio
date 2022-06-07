<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function getAll(){
$autores = Autor::get();
return $autores;
    }
    public function create(Request $request)
    {
        $autor= new Autor([
            'nombre' => $request->nombre,
            'estado' => $request->estado
        ]);

        $autor->save();
        return response()->json($autor, 200);
    }
}
