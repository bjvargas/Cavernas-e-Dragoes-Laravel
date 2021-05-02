<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Util extends Controller
{
 
    public function converteAtributo($valor)
    {
        return floor(($valor - 10) / 2);
    }


    public function calculaHpInicial($dadoVida, $modConstituicao)
    {
        
        return $dadoVida + $modConstituicao;
    }
}
