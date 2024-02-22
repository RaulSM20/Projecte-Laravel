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

    /**
     * Get the medidas for the user.
     */
    public function medidas()
    {
        return $this->hasMany(Medidas::class);
    }

    /**
     * Get the logros for the user.
     */
    public function logros()
    {
        return $this->hasMany(Logros::class);
    }

    /**
     * Get the retos that the user participates in.
     */
    public function retos()
    {
        return $this->belongsToMany(Retos::class);
    }
}
