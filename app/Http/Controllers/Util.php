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
     * string $classe e int $modConstituicao .
     * return: Modificador
     */
    public function calculaHpInicial($classe, $modConstituicao)
    {
        switch ($classe) {
            case "Guerreiro":
                return (10 + $modConstituicao);
                break;
            case "Barbaro":
                return (12 + $modConstituicao);
                break;
            case "Bardo":
                return (8 + $modConstituicao);
                break;
            case "Feiticeiro":
                return (6 + $modConstituicao);
                break;
        }
    }
}
