<?php

namespace Database\Seeders;

use App\Models\Raca;
use Illuminate\Database\Seeder;

class RacaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Raca::create(['nome' => 'Anão']);
        Raca::create(['nome' => 'Elfo']);
        Raca::create(['nome' => 'Meio-Elfo']);
        Raca::create(['nome' => 'Halfling']);
        Raca::create(['nome' => 'Humano']);
        Raca::create(['nome' => 'Draconatos']);
        Raca::create(['nome' => 'Gnomo']);
        Raca::create(['nome' => 'Meio-Orc']);
        Raca::create(['nome' => 'Tieflings']);
        Raca::create(['nome' => 'Fernando']);
    }
}
