<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejercicio extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'foto',
        'grupos_musculares',
    ];

   
    public function rutinas()
    {
        return $this->belongsToMany(Rutina::class, 'rutina_ejercicio');
    }
    
    public function entrenamientos()
    {
        return $this->belongsToMany(Entrenamiento::class, 'ejercicio_entrenamiento');
    }
    
}
