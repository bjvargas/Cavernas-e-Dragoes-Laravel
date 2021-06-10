<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listaequipamentos extends Model
{
    protected $table='listaequipamentos';
    protected $fillable=['id','id_personagem', 'id_equipamento', 'quantidade']; 
    public $timestamps = false;

    use HasFactory;
}
