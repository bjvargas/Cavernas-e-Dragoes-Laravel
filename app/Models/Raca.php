<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raca extends Model
{
    protected $table='racas';
    protected $fillable=['nome'];
    public $timestamps = false;
    use HasFactory;
}
