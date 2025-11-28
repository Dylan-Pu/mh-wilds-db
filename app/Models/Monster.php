<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Monster extends Model
{
    use HasFactory;

    protected $table = 'monsters';

    protected $fillable = [
        'name',
        'slug',
        'icon',
        'image',
        'is_large',
        'affliction_weaknesses',
    ];

    // ← C’EST LA LIGNE MAGIQUE QUI RÉGLERA TOUT
    protected $casts = [
        'affliction_weaknesses' => 'array',
        'weaknesses' => 'array',           // si tu l’avais déjà
        'physical_weaknesses' => 'array',  // si tu l’utilises
    ];

    public function parts(): HasMany
    {
        return $this->hasMany(MonsterPart::class);
    }

    public function drops(): HasMany
    {
        return $this->hasMany(MonsterDrop::class);
    }
}