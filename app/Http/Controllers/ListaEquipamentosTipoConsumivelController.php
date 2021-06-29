<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaEquipamentoRequest;
use App\Models\Equipamento;
use App\Models\ListaEquipamento;
use App\Models\Personagem;
use Illuminate\Support\Facades\DB;

class ListaEquipamentosTipoConsumivelController extends Controller
{

    private $objListaEquipamento;
    private $objPersonagem;
    private $objUtil;

    public function __construct()
    {
        $this->objUtil=new Util();
        $this->objListaEquipamento = new ListaEquipamento();
        $this->objPersonagem = new Personagem();
    }

    public function criarAdicionar(ListaEquipamentoRequest $request)
    {
        if($request->quantidade < 1){
            return redirect()->back()->withErrors('Você deve informar no mínimo 1 item.');
        }
        $equipamento = DB::table('lista_equipamentos')
            ->select('lista_equipamentos.*')
            ->where('lista_equipamentos.equipamento_id', '=', $request->equipamento_id)
            ->where('lista_equipamentos.personagem_id', '=', $request->personagem_id)
            ->count();
        $equipamentos = DB::table('lista_equipamentos')
            ->select('lista_equipamentos.*')
            ->where('lista_equipamentos.equipamento_id', '=', $request->equipamento_id)
            ->where('lista_equipamentos.personagem_id', '=', $request->personagem_id)
            ->get();        

        if ($equipamento == 0) {
            $cad = $this->store($request);
            if ($cad) {
                return redirect(url("exibirListaEquipamentosTipoConsumivel/$cad->personagem_id"));
            }
        } else {
            $equip = $equipamentos[0];
            $this->objUtil->atualizarQuantidade($request, $equip->id, $equip->quantidade, 1);

            return redirect(url("exibirListaEquipamentosTipoConsumivel/$equip->personagem_id"));
        }
    }

    public function remover(ListaEquipamentoRequest $request)
    {
        $equipamentos = DB::table('lista_equipamentos')
            ->select('lista_equipamentos.*')
            ->where('lista_equipamentos.equipamento_id', '=', $request->equipamento_id)
            ->where('lista_equipamentos.personagem_id', '=', $request->personagem_id)
            ->get();
      
            $equip = $equipamentos[0];
            if($equip->quantidade < $request->quantidade){
                return redirect()->back()->withErrors('Quantidade informada maior do que você possui. Caso queira remover o item do inventário, clique em Deletar Equipamento');
            }
            $this->objUtil->atualizarQuantidade($request, $equip->id, $equip->quantidade, 2);

            return redirect(url("exibirListaEquipamentosTipoConsumivel/$equip->personagem_id"));
        
    }

    public function store(ListaEquipamentoRequest $request)
    {
        $cad = $this->objListaEquipamento->create([
            'personagem_id' => $request->personagem_id,
            'equipamento_id' => $request->equipamento_id,
            'quantidade' => $request->quantidade
        ]);
        if ($cad) {
            return $cad;
        }
    }    

    public function exibirListaEquipamentosTipoConsumivel($id)
    {

        $equipamentos = DB::table('equipamentos')
            ->join('lista_equipamentos', 'equipamentos.id', '=', 'lista_equipamentos.equipamento_id')
            ->select('equipamentos.*', 'lista_equipamentos.id as id_cadastro',  'lista_equipamentos.quantidade')
            ->where('lista_equipamentos.personagem_id', '=', $id)
            ->where('equipamentos.tipo', '=', 'Consumivel')
            ->get();

        $todosEquipamentosConsumivel =  DB::table('equipamentos')
            ->select('*')
            ->where('equipamentos.tipo', '=', 'Consumivel')
            ->get();

        $personagem = $this->objPersonagem->find($id);
        return view('equipamentos.listaEquipamentosDoPersonagemC', compact(
            'personagem',
            'equipamentos',
            'todosEquipamentosConsumivel'
        ));
    }
}
