<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function entrenamientos()
    {
        return $this->hasMany(Entrenamiento::class);
    }


    public function medidas()
    {
        return $this->hasMany(Medidas::class);
    }


    public function logros()
    {
        return $this->hasMany(Logros::class);
    }


    public function retos()
    {
        return $this->belongsToMany(Retos::class);
    }
    public function rutina()
    {
        return $this->belongsToMany(Rutina::class, 'usuario_rutina');
    }
}
