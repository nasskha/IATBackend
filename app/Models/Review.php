<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = [
        'user_id', // ID van de huisdiereigenaar
        'pet_id', // ID van het huisdier
        'rating', // beoordeling (bijv. 1 tot 5)
        'comment', // commentaar op de oppas
    ];

    // Relatie met huisdier
    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }

    // Relatie met de huisdiereigenaar (User)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
