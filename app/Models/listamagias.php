<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listamagias extends Model
{
    protected $table='listamagias';
    protected $fillable=['id_personagem', 'id_magia']; 
    public $timestamps = false;

    use HasFactory;
}
