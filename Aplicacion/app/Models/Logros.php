<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logros extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'user_id',
        'nombre',
        'descripcion',
        'fecha',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
