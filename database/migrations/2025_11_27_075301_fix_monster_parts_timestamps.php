<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('monster_parts', function (Blueprint $table) {
            $table->timestamps(); // ← Ajoute updated_at + created_at
        });
    }

    public function down(): void
    {
        Schema::table('monster_parts', function (Blueprint $table) {
            $table->dropTimestamps();
        });
    }
};