<?php

namespace App\Http\Controllers;

use App\Models\Medidas;
use App\Models\User;
use Illuminate\Http\Request;

class usuarioController extends Controller
{

   public function index(Request $request) {

        $medidas = Medidas::where('user_id', $request->id)->paginate(6);
        
    return view('Front Page/perfilUsuario', compact('medidas'), ['progresos' => $medidas]);
    }
    public function show()
    {
        
        $usuarios = User::all();

        return view('mostrarUsuarios', ['usuarios' => $usuarios]);
    }


}
