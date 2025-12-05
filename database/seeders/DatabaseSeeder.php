<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <- nécessaire pour DB::table()

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('monster_parts')->delete();
        DB::table('monster_drops')->delete();
        DB::table('monsters')->delete();


        // On lance notre seeder MH Wilds
        $this->call(MonsterHunterWildsSeeder::class);
    }
}
