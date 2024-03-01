<?php

use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\usuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Roles 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:admin'])->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth')->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// mostrar listados del dashboard
Route::get('/dashboard/usuarios', [usuarioController::class, 'show']);
////
Route::resource('/dashboard/rutinas', RutinaController::class);
Route::resource('/dashboard/ejercicios', EjercicioController::class);





require __DIR__.'/auth.php';
