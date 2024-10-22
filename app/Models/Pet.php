<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pet extends Model
{
    protected $fillable = ['name', 'animal_type', 'profile_picture', 'when', 'hourly_price', 'time'];

    public function owner(){
        return $this->belongsTo(User::class);
    
    }

    public function requests(){
        return $this->hasMany(Request::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

}
