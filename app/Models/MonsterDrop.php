<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MonsterDrop extends Model
{
    protected $fillable = ['monster_id', 'item_name', 'item_icon', 'rarity', 'rank', 'rates'];
    protected $casts = ['rates' => 'array'];

    public function monster(): BelongsTo
    {
        return $this->belongsTo(Monster::class);
    }
}