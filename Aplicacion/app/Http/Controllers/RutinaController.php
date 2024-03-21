<?php

namespace App\Http\Controllers;

use App\Models\Ejercicio;
use App\Models\Rutina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('rutinas', 'public');
            $rutina->foto = 'storage/' . $path;
        } else {
            $rutina->foto = 'NO IMAGEN';
        }
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
        $rutina = Rutina::find($id);
        return view("editarRutina", ['rutina' => $rutina]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $rutina = Rutina::find($id);
        $rutina->nombre = $request->nombre;
        $rutina->descripcion = $request->descripcion;
        $rutina->nivel_dificultad = $request->dificultad;
        // Si se proporciona una nueva imagen, actualiza la foto
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('rutinas', 'public');
            $rutina->foto = 'storage/' . $imagenPath;
        }
        $rutina->save();
        return redirect('dashboard/rutinas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rutina = Rutina::findOrFail($id);
        $rutina->delete();

        return redirect('/dashboard/rutinas');
    }

    public function agregarEjercicios()
    {
        $rutinas = Rutina::all();
        $ejercicios = Ejercicio::all();
        return view('agregar_ejercicios_a_rutina', ['rutinas' => $rutinas, 'ejercicios' => $ejercicios]);
    }

    public function agregarEjercicio(Request $request)
    {
        // Obtener los datos del formulario
        $rutinaId = $request->rutina;
        $ejercicioId = $request->ejercicio;
        $numeroSeries = $request->series;
        $numeroRepeticiones = $request->repeticiones;
        $rir = $request->rir;

        $rutina = Rutina::findOrFail($rutinaId);
        $ejercicio = Ejercicio::findOrFail($ejercicioId);

        // Agregar el ejercicio a la rutina
        $rutina->ejercicios()->attach($ejercicio, [
            'numero_series' => $numeroSeries,
            'numero_repeticiones' => $numeroRepeticiones,
            'rir' => $rir,
        ]);

        toast()
            ->success('Ejercicio añadido')
            ->pushOnNextPage();

        return redirect()->back()->with('success', 'Ejercicio agregado a la rutina exitosamente.');
    }

    public function asignarRutina($id)
    {
        $usuario = Auth::user();
        $rutina = Rutina::findOrFail($id);

        // Asignar la rutina al usuario
        $usuario->rutina()->sync([$rutina->id]);

        toast()
            ->success('Rutina añadida')
            ->pushOnNextPage();

        return back();
    }
}
