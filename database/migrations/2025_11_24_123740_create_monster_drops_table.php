<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('monster_drops', function (Blueprint $table) {
        $table->id();
        $table->foreignId('monster_id')->constrained()->cascadeOnDelete();
        $table->string('item_name');
        $table->string('item_icon')->nullable();
        
        // % directs
        $table->integer('target')->nullable();
        $table->string('break')->nullable();
        $table->integer('carve')->nullable();
        $table->integer('wound')->nullable();
        $table->integer('shiny')->nullable();

        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('monster_drops');
    }
};