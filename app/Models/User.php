<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin', // om admin-rechten aan te geven
        'is_blocked', // om geblokkeerde gebruikers aan te geven
        'house_picture',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relatie met huisdieren
    public function pets(): HasMany
    {
        return $this->hasMany(Pet::class);
    }

    // Relatie met reviews
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    // Relatie met aanvragen
    public function requests(): HasMany
    {
        return $this->hasMany(Request::class);
    }
}
