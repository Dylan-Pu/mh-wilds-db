<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonsterPart extends Model
{
    use HasFactory;

    protected $table = 'monster_parts';

    protected $fillable = [
        'monster_id',
        'name',
        'physical',
        'elemental',
    ];

    protected $casts = [
        'physical'  => 'array',
        'elemental' => 'array',
    ];

    public function monster()
    {
        return $this->belongsTo(Monster::class);
    }
}
