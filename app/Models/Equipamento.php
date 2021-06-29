<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
protected $table='equipamentos';
protected $fillable=['nome', 'tipo', 'preco', 'ca', 'forca', 'furtividade', 
'peso', 'dano', 'propriedade', 'descricao'];

    use HasFactory;
}
