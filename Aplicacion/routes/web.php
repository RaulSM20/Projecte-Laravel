<?php

use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\usuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth/login');
});

// Roles dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin'])->name('dashboard');

Route::get('/welcome', function () {
    if (auth()->user()->hasRole('admin')) {
        return view('dashboard');
    } else {
        return view('welcome'); //TODO TE TIENE QUE LLEVAR AL FRONT
    }
})->middleware('auth')->name('welcome');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(['auth', 'role:admin'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->middleware(['auth', 'role:admin'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->middleware(['auth', 'role:admin'])->name('profile.destroy');
});

// mostrar listados del dashboard
Route::get('/dashboard/usuarios', [usuarioController::class, 'show']);

// CRUD
Route::resource('/dashboard/rutinas', RutinaController::class)->middleware(['auth', 'role:admin']);
Route::resource('/dashboard/ejercicios', EjercicioController::class)->middleware(['auth', 'role:admin']);





require __DIR__.'/auth.php';
