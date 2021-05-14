<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $table='personagem';
    protected $fillable=['nome', 'id_classe', 'id_raca', 'id_user', 'forca', 
    'destreza', 'constituicao', 'inteligencia', 'sabedoria', 'carisma', 'vida'];

    
    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id','id_user'); 
    }

    public function relClasses()
    {
        return $this->hasOne('App\Models\Classes', 'id','id_classe'); 
    }
    public function relRacas()
    {
        return $this->hasOne('App\Models\Raca', 'id','id_raca'); 
    }
    
   use HasFactory;
}
