<?php

namespace Database\Seeders;

use App\Models\Personagem;
use Illuminate\Database\Seeder;
use App\Http\Controllers\Util;
use App\Models\Classe;

class PersonagemSeeder extends Seeder
{
    
    private $objClasse;
    private $objUtil;
            
    public function __construct()
    {
        $this->objClasse=new Classe();
        $this->objUtil=new Util();
    }

        /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Anaxibia', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20),
         'vida' => $this->atribuirHp($constituicao, $idClasse)]);        

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Bromios', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Cybele', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);
        
        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Eidothea', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Fawkes', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Galateia', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Eustacia', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Hopladamos', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Iphis', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Justitia', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Kaunos', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Lampetos', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Menestheus', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Nyx', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Orthaia', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Perseus', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Quyou', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Rhadamanthys', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Silvanus', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Thamyris', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Uranos', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Vesta', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Wynefreede', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Xuxa', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Ywain', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Zephyrus', 'classe_id' => $idClasse, 'raca_id'=>rand(1,10), 'user_id'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);
    }
    public function atribuirHp($constituicao,$idClasse){
        $classe=$this->objClasse->find($idClasse);
        return $this->objUtil->calculaHpInicial($classe->dado_vida, $this->objUtil->converteAtributo($constituicao));        
    }
}
