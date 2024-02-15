<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retos extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha_inicio',
        'fecha_finalizacion',
        'estado',
    ];
    
    public function usuarios()
    {
        return $this->belongsToMany(User::class);
    }
}
