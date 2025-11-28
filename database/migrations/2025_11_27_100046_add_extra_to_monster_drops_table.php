<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('monster_drops', function (Blueprint $table) {
        $table->json('extra')->nullable()->after('wound');
    });
}

public function down()
{
    Schema::table('monster_drops', function (Blueprint $table) {
        $table->dropColumn('extra');
    });
}
};
