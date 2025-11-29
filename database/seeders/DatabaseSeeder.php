<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // On lance UNIQUEMENT notre seeder MH Wilds
        $this->call(MonsterHunterWildsSeeder::class);
    }
}