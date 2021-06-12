<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([RacaSeeder::class, 
        ClasseSeeder::class, 
        UserSeeder::class, 
        PersonagemSeeder::class,
        MagiaSeeder::class,
        EquipamentoSeeder::class]);

    }
}
