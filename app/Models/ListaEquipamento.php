<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaEquipamento extends Model
{
    protected $table='lista_equipamentos';
    protected $fillable=['id','personagem_id', 'equipamento_id', 'quantidade']; 
    public $timestamps = false;

    use HasFactory;
}
