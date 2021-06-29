<?php

namespace Database\Seeders;

use App\Models\Classe;
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
       Classe::create(['nome' => 'Bárbaro','dado_vida' =>'12', 'habilidade_primaria'=> 'Força', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Bardo','dado_vida' =>'8', 'habilidade_primaria'=> 'Carisma', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Bruxo','dado_vida' =>'8', 'habilidade_primaria'=> 'Carisma', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Clérigo','dado_vida' =>'8', 'habilidade_primaria'=> 'Sabedoria', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Druida','dado_vida' =>'8', 'habilidade_primaria'=> 'Sabedoria', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Feiticeiro','dado_vida' =>'6', 'habilidade_primaria'=> 'Carisma', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Guerreiro','dado_vida' =>'10', 'habilidade_primaria'=> 'Força ou Destreza', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Ladino','dado_vida' =>'8', 'habilidade_primaria'=> 'Destreza', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Mago','dado_vida' =>'6', 'habilidade_primaria'=> 'Inteligência', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Monge','dado_vida' =>'8', 'habilidade_primaria'=> 'Destreza & Sabedoria', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Paladino','dado_vida' =>'10', 'habilidade_primaria'=> 'Força & Carisma', 'proeficiencia_ressitencia'=>'1']);
       Classe::create(['nome' => 'Patrulheiro','dado_vida' =>'10', 'habilidade_primaria'=> 'Destreza & Sabedoria', 'proeficiencia_ressitencia'=>'1']);
    }
}
