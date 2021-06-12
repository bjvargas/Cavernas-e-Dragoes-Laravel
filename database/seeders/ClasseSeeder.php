<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Classes::create(['nome' => 'Bárbaro','dado_vida' =>'12', 'habilidade_primaria'=> 'Força', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Bardo','dado_vida' =>'8', 'habilidade_primaria'=> 'Carisma', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Bruxo','dado_vida' =>'8', 'habilidade_primaria'=> 'Carisma', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Clérigo','dado_vida' =>'8', 'habilidade_primaria'=> 'Sabedoria', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Druida','dado_vida' =>'8', 'habilidade_primaria'=> 'Sabedoria', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Feiticeiro','dado_vida' =>'6', 'habilidade_primaria'=> 'Carisma', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Guerreiro','dado_vida' =>'10', 'habilidade_primaria'=> 'Força ou Destreza', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Ladino','dado_vida' =>'8', 'habilidade_primaria'=> 'Destreza', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Mago','dado_vida' =>'6', 'habilidade_primaria'=> 'Inteligência', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Monge','dado_vida' =>'8', 'habilidade_primaria'=> 'Destreza & Sabedoria', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Paladino','dado_vida' =>'10', 'habilidade_primaria'=> 'Força & Carisma', 'proeficiencia_ressitencia'=>'1']);
       Classes::create(['nome' => 'Patrulheiro','dado_vida' =>'10', 'habilidade_primaria'=> 'Destreza & Sabedoria', 'proeficiencia_ressitencia'=>'1']);
    }
}
