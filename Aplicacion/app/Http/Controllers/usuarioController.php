<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    public function show()
    {
        
        $usuarios = User::all();

        return view('mostrarUsuarios', ['usuarios' => $usuarios]);
    }
}
