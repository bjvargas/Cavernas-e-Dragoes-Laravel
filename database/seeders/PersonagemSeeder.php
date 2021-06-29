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
        Personagem::create(['nome'=>'Anaxibia', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);        

        Personagem::create(['nome'=>'Bromios', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Cybele', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);
        
        Personagem::create(['nome'=>'Eidothea', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Fawkes', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Galateia', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Eustacia', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Hopladamos', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Iphis', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Justitia', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Kaunos', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Lampetos', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Menestheus', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Nyx', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Orthaia', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Perseus', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Quyou', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Rhadamanthys', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Silvanus', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Thamyris', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Uranos', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Vesta', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Wynefreede', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Xuxa', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Ywain', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);

        Personagem::create(['nome'=>'Zephyrus', 'classe_id' => rand(1,12), 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> rand(6,20), 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => rand(10,20)]);
    }
}
