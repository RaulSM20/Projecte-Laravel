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
}
