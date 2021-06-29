<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListaMagia extends Model
{
    protected $table='lista_magias';
    protected $fillable=['personagem_id', 'magia_id']; 
    public $timestamps = false;

    use HasFactory;
}
