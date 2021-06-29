<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaEquipamentoRequest;
use App\Models\ListaEquipamento;

class Util extends Controller
{
 
    private $objListaEquipamento;


    public function __construct()
    {
        $this->objListaEquipamento = new ListaEquipamento();
    }

    public function converteAtributo($valor)
    {
        return floor(($valor - 10) / 2);
    }


    public function calculaHpInicial($dadoVida, $modConstituicao)
    {
        
        return $dadoVida + $modConstituicao;
    }

    /**
     * Parametro $operacao: 1 = Adicionar, 2 = Remover.
     */
    public function atualizarQuantidade(ListaEquipamentoRequest $request, $id, $quantidadeAtual, $operacao)
    {
        $calculo = 0;
        if($operacao == 1){
            $calculo = ($quantidadeAtual + $request->quantidade);
        } else if ($operacao == 2) {
            $calculo = ($quantidadeAtual - $request->quantidade);
            if($calculo == 0){
                return redirect()->back()->withErrors('Você deve possuir no mínimo 1 item.');
            }
        }

        $this->objListaEquipamento->where(['id' => $id])->update([
            'personagem_id' => $request->personagem_id,
            'equipamento_id' => $request->equipamento_id,            
            'quantidade' => $calculo            
        ]);
    }
}
