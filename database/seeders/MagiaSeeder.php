<?php

namespace Database\Seeders;

use App\Models\Magia;
use Illuminate\Database\Seeder;

class MagiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Magia::create(['nome'=> 'Espirro Ácido', 
        'descricao'=> 'Você arremessa uma bolha de ácido.',
        'level'=> '0','escola'=> 'Conjuração', 'tempodeconjuracao'=> '1 ação','alcance'=> '18',
        'componentes'=> ' ','verbal'=> '1','somatico'=> '1','material' => '0',
        'duracao'=> 'Instantânea','classe'=> 'Mago',
        'levelmaior'=> 'O dano dessa magia aumenta em 1d6 quando você
        alcança o 5°nível (2d6), 11° nível (3d6) e 17° nível (4d6).
        ']);
    }
}
