<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $table='personagem';
    protected $fillable=['nome', 'classe', 'raca', 'id_user', 'forca', 
    'destreza', 'constituicao', 'inteligencia', 'sabedoria', 'carisma', 'vida'];

    
    public function relUsers()
    {
        return $this->hasOne('App\Models\User', 'id','id_user'); //erro
    }
    
   use HasFactory;
}
