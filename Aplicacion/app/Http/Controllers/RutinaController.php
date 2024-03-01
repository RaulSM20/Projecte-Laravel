<?php

namespace App\Http\Controllers;

use App\Models\Rutina;
use Illuminate\Http\Request;

class RutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rutinas = Rutina::all();

        return view('mostrarRutinas', ['rutinas' => $rutinas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crearRutinas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rutina = new Rutina();
        $rutina->nombre = $request->nombre;
        $rutina->descripcion = $request->descripcion;
        $rutina->nivel_dificultad = $request->dificultad;
        $path = $request->file('imagen')->store('rutinas', 'public');
        $rutina->foto = 'storage/'.$path;
        $rutina->save();

        return view('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rutina $rutina)
    {

       return $rutina;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
