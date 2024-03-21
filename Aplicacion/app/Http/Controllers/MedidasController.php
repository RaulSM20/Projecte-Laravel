<?php

namespace App\Http\Controllers;

use App\Models\Medidas;
use Illuminate\Http\Request;

class MedidasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medidas = Medidas::all();

        return view('Front Page/perfilUsuario', ['progresos' => $medidas]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $medida = new Medidas();
        $medida->user_id = $request->idUser;
        $medida->fecha = $request->fecha;
        $medida->peso = $request->peso;
        $medida->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Medidas $medida)
    {
        return $medida;
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
