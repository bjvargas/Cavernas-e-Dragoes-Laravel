<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $table='classes';
    protected $fillable=['nome', 'dado_vida', 'habilidade_primaria', 'proeficiencia_ressitencia'];
    public $timestamps = false;

    use HasFactory;
}
