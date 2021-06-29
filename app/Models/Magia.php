<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magia extends Model
{
    protected $table='magias';
    protected $fillable=['nome', 'descricao', 'level', 'escola', 
    'tempodeconjuracao', 'alcance', 'componentes', 'verbal', 'somatico', 'material',
    'duracao','classe','levelmaior']; 


   /* public function relPersonagens()
    {
        return $this->hasMany('App\Models\Personagem','id','user_id');
    }
    */
    use HasFactory;
}


