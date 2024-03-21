<?php

use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\entrenarController;
use App\Http\Controllers\logroController;
use App\Http\Controllers\MedidasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\retoController;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\usuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Front Page.inicio');
});

// Roles dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin'])->name('dashboard');

// Primera entrada en la app
Route::get('/welcome', function () {
    if (auth()->user()->hasRole('admin')) {
        return view('dashboard');
    } else {
        return view('Front Page.inicio');
    }
})->middleware('auth')->name('welcome');

// Editar perfil administrador
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'role:admin'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'role:admin'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('profile.destroy');
    
});

// Rutinas
Route::get('/dashboard/rutinas/agregar-ejercicios', [RutinaController::class, 'agregarejercicios'])->name('agregar-ejercicios');
Route::post('/agregar-ejercicio-a-rutina', [RutinaController::class, 'agregarEjercicio'])
    ->name('agregar_ejercicio_a_rutina');

// mostrar listados del dashboard
Route::get('/dashboard/usuarios', [usuarioController::class, 'show']);

// CRUD
Route::resource('/dashboard/rutinas', RutinaController::class)->middleware(['auth', 'role:admin']);
Route::resource('/dashboard/ejercicios', EjercicioController::class)->middleware(['auth', 'role:admin']);
Route::resource('/medidas', MedidasController::class);

// Perfil de usuario

Route::get('/user/perfil/{id?}', [usuarioController::class, 'index']);

// Retos y logros

Route::get('/retos', [retoController::class, 'index'])->name('retos.index');
Route::get('/logros', [logroController::class, 'index'])->name('logro.index');

// Registro de entrenamientos

Route::get('/entrenar', [entrenarController::class, 'index'])->name('entrenar.index');
Route::get('/entrenar/{id}/ejercicios', [entrenarController::class, 'ejercicios'])->name('entrenar.ejercicios');
Route::post('/registrar-entrenamiento/{id}', [entrenarController::class, 'registrarEntrenamiento'])->name('entrenar.entrenamiento');
Route::middleware('auth')->post('/rutinas/{id}/asignar', [RutinaController::class, 'asignarRutina'])->name('asignar.rutina');




require __DIR__.'/auth.php'; 
