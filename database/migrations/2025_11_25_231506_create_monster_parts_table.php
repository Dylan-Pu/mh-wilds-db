<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('monster_parts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('monster_id');

            $table->string('name');

            // On garde les deux colonnes JSON pour les valeurs
            $table->json('physical')->nullable();   // cut / blunt / ammo
            $table->json('elemental')->nullable();  // fire / water / thunder / ice / dragon
            $table->json('affliction_weaknesses')->nullable();

            $table->foreign('monster_id')
                ->references('id')->on('monsters')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('monster_parts');
    }
};
