<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <- nécessaire pour DB::table()

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // On vide la table monsters avant de reseeder
        DB::table('monsters')->truncate();

        // On lance notre seeder MH Wilds
        $this->call(MonsterHunterWildsSeeder::class);
    }
}
