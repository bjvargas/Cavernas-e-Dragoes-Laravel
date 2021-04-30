<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listaequipamentos extends Model
{
    protected $table='listaequipamentos';
    protected $fillable=['id_personagem', 'id_equipamento']; 
    public $timestamps = false;

    use HasFactory;
}
