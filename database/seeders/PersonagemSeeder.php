<?php

namespace Database\Seeders;

use App\Models\Personagem;
use Illuminate\Database\Seeder;
use App\Http\Controllers\Util;

class PersonagemSeeder extends Seeder
{
        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personagem::create(['nome'=>'Anaxibia', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);        

        Personagem::create(['nome'=>'Bromios', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Cybele', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);
        
        Personagem::create(['nome'=>'Eidothea', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Fawkes', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Galateia', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Eustacia', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Hopladamos', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Iphis', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Justitia', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Kaunos', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Lampetos', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Menestheus', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Nyx', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Orthaia', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Perseus', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Quyou', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Rhadamanthys', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Silvanus', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Thamyris', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Uranos', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Vesta', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Wynefreede', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Xuxa', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Ywain', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Zephyrus', 'id_classe' => rand(1,12), 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);
    }
}
