<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Rutina;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
     public function users(Request $request) {
        
        //obtener los usuarios y retornarlos en formato json
        $user = User::all();

        return response()->json($user);
    }
    public function rutinas(Request $request) {
        
        //obtener todas las rutinas y retornarlos en formato json
        $rutina = Rutina::all();

        return response()->json($rutina);
    }
    public function ejercicios(Request $request) {
        
        //obtener todos los ejercicios y retornarlos en formato json
        $ejercicio = Ejercicio::all();

        return response()->json($ejercicio);
    }
}
