<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Request extends Model
{
    protected $fillable = [
        'pet_id', // ID van het huisdier
        'user_id', // ID van de oppas
        'status', // status van de aanvraag (bijv. 'pending', 'accepted', 'rejected')
    ];

    // Relatie met huisdier
    public function pet(): BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }

    // Relatie met de oppas (User)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}