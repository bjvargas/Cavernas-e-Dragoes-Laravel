<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Util extends Controller
{
    /**
     * Método de conversão de status base de atributo para modificador.
     * int $valor: atributo base.
     * return: Modificador
     */
    public function converteAtributo($valor)
    {
        return floor(($valor - 10) / 2);
    }

    /**
     * Calcula hp inicial do char.
     * integer $hp e int $modConstituicao .
     * return: Modificador
     */
    public function calculaHpInicial($dadoVida, $modConstituicao)
    {
        
        return $dadoVida + $modConstituicao;
    }
}
