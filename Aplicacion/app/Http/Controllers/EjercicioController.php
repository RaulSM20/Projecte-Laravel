<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use Illuminate\Http\Request;

class EjercicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ejercicios = Ejercicio::all();

        return view('mostrarEjercicios', ['ejercicios' => $ejercicios]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearEjercicios');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ejercicio = new Ejercicio();
        $ejercicio->nombre = $request->nombre;
        $ejercicio->descripcion = $request->descripcion;
        $ejercicio->grupos_musculares = $request->grupos;
        $path = $request->file('imagen')->store('ejercicios', 'public');
        $ejercicio->foto = 'storage/'.$path;
        $ejercicio->save();

        return view('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ejercicio $ejercicio)
    {
        return $ejercicio;
    }

     /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ejercicio = Ejercicio::find($id);
        return view("editarEjercicios", ['ejercicio' => $ejercicio]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $ejercicio = Ejercicio::find($id);
        $ejercicio->nombre = $request->nombre;
        $ejercicio->descripcion = $request->descripcion;
        $ejercicio->grupos_musculares = $request->grupos;
        // Si se proporciona una nueva imagen, actualiza la foto
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('rutinas', 'public');
            $ejercicio->foto = 'storage/' . $imagenPath;
        }
        $ejercicio->save();
        return redirect('dashboard/ejercicios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ejercicio = Ejercicio::findOrFail($id);
        $ejercicio->delete();

        return redirect('/dashboard/ejercicios');
    }
}
