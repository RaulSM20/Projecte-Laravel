<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'foto',
        'nivel_dificultad',
    ];
    public function ejercicios()
    {
        return $this->belongsToMany(Ejercicio::class, 'rutina_ejercicio')
            ->withPivot(['numero_series', 'numero_repeticiones', 'rir']);
    }


    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'entrenamiento_rutina');
    }
    public function usuarios_rutina()
    {
        return $this->belongsToMany(User::class, 'usuario_rutina');
    }
}
