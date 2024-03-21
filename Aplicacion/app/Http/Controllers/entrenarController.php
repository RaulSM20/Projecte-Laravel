<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Rutina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class entrenarController extends Controller
{
    public function index()
{
    $usuario = Auth::user();
    $rutinaAsignada = $usuario->rutina->first();
    $rutinas = Rutina::all();
    return view('Front Page.entrenar', compact('rutinaAsignada', 'rutinas'));
}

    public function ejercicios($id)
    {
        $rutina = Rutina::findOrFail($id);
        $ejercicios = $rutina->ejercicios;
        $usuario = Auth::user();
        return view('Front Page.ejercicios', compact('rutina', 'ejercicios', 'usuario'));
    }
}
