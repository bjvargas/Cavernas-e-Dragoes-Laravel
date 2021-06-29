<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $table='personagens';
    protected $fillable=['nome', 'classe_id', 'raca_id', 'user_id', 'forca', 
    'destreza', 'constituicao', 'inteligencia', 'sabedoria', 'carisma', 'vida'];

    
    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id','user_id'); 
    }

    public function relClasses()
    {
        return $this->hasOne('App\Models\Classe', 'id','classe_id'); 
    }
    public function relRacas()
    {
        return $this->hasOne('App\Models\Raca', 'id','raca_id'); 
    }
    
   use HasFactory;
}
