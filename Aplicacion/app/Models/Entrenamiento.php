<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenamiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'rutina_id',
        'usuario_id',
        'fecha',
    ];


    public function rutina()
    {
        return $this->belongsTo(Rutina::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function ejercicios()
    {
        return $this->belongsToMany(Ejercicio::class, 'ejercicio_entrenamiento')
            ->withPivot(['numero_series', 'numero_repeticiones', 'rir'])
            ->withTimestamps();
    }
}
