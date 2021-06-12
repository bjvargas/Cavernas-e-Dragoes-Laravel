<?php

namespace Database\Seeders;

use App\Models\Equipamentos;
use Illuminate\Database\Seeder;

class EquipamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipamentos::create(['nome' => 'Armadura Acolchoada', 'tipo' => 'Defesa', 'preco' => '5', 'ca' => '11',
        'forca' => '-', 'furtividade' => '1', 'peso' => '4', 
        'dano' => '0', 'propriedade' => '0', 'descricao' => 'Armadura Leve']);

        Equipamentos::create(['nome' => 'Alabarda', 'tipo' => 'Ataque', 'preco' => '20', 'ca' => '0',
        'forca' => '-', 'furtividade' => '0', 'peso' => '3', 
        'dano' => '1d10 Perfurante', 'propriedade' => 'Pesada, alcance, duas mãos', 
        'descricao' => 'Armas Marciais Corpo-a-Corpo']);

        Equipamentos::create(['nome' => 'Poção de Cura', 'tipo' => 'Consumivel', 'preco' => '50', 'ca' => '0',
        'forca' => '-', 'furtividade' => '1', 'peso' => '0.25', 
        'dano' => '0', 'propriedade' => 'Restaura vida', 
        'descricao' => '. Um personagem que beber o líquido vermelho mágico deste frasco recupera 2d4+2 pontos de
        vida. Beber ou administrar uma poção exige uma ação.']);

        Equipamentos::create(['nome' => 'Elefante', 'tipo' => 'Outro', 'preco' => '200', 'ca' => '0',
        'forca' => '-', 'furtividade' => '1', 'peso' => '660', 
        'dano' => '0', 'propriedade' => 'Deslocamento 12m', 'descricao' => 'Montarias e outros animais']);
    }
}
