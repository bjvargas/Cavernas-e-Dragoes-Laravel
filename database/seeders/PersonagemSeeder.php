<?php

namespace Database\Seeders;

use App\Models\Personagem;
use Illuminate\Database\Seeder;
use App\Http\Controllers\Util;
use App\Models\Classes;

class PersonagemSeeder extends Seeder
{
    
    private $objClasse;
    private $objUtil;
            
    public function __construct()
    {
        $this->objClasse=new Classes();
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
        Personagem::create(['nome'=>'Anaxibia', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20),
         'vida' => $this->atribuirHp($constituicao, $idClasse)]);        

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Bromios', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Cybele', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);
        
        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Eidothea', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Fawkes', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Galateia', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Eustacia', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Hopladamos', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Iphis', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Justitia', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Kaunos', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Lampetos', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Menestheus', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Nyx', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Orthaia', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Perseus', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Quyou', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Rhadamanthys', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Silvanus', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Thamyris', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Uranos', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Vesta', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Wynefreede', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Xuxa', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Ywain', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);

        $constituicao=rand(6,20);
        $idClasse=rand(1,12);
        Personagem::create(['nome'=>'Zephyrus', 'id_classe' => $idClasse, 'id_raca'=>rand(1,10), 'id_user'=>'1', 
        'forca' => rand(6,20), 'destreza'=> rand(6,20), 'constituicao'=> $constituicao, 'inteligencia'=> rand(6,20), 
        'sabedoria'=> rand(6,20), 'carisma'=> rand(6,20), 'vida' => $this->atribuirHp($constituicao, $idClasse)]);
    }
    public function atribuirHp($constituicao,$idClasse){
        $classe=$this->objClasse->find($idClasse);
        return $this->objUtil->calculaHpInicial($classe->dado_vida, $this->objUtil->converteAtributo($constituicao));        
    }
}
