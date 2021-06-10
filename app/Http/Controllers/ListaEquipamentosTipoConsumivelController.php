<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaEquipamentoRequest;
use App\Models\Equipamentos;
use App\Models\listaequipamentos;
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
        $this->objListaEquipamento = new listaequipamentos();
        $this->objPersonagem = new Personagem();
    }

    public function criarAdicionar(ListaEquipamentoRequest $request)
    {
        if($request->quantidade < 1){
            return redirect()->back()->withErrors('Você deve informar no mínimo 1 item.');
        }
        $equipamento = DB::table('listaequipamentos')
            ->select('listaequipamentos.*')
            ->where('listaequipamentos.id_equipamento', '=', $request->id_equipamento)
            ->where('listaequipamentos.id_personagem', '=', $request->id_personagem)
            ->count();
        $equipamentos = DB::table('listaequipamentos')
            ->select('listaequipamentos.*')
            ->where('listaequipamentos.id_equipamento', '=', $request->id_equipamento)
            ->where('listaequipamentos.id_personagem', '=', $request->id_personagem)
            ->get();        

        if ($equipamento == 0) {
            $cad = $this->store($request);
            if ($cad) {
                return redirect(url("exibirListaEquipamentosTipoConsumivel/$cad->id_personagem"));
            }
        } else {
            $equip = $equipamentos[0];
            $this->objUtil->atualizarQuantidade($request, $equip->id, $equip->quantidade, 1);

            return redirect(url("exibirListaEquipamentosTipoConsumivel/$equip->id_personagem"));
        }
    }

    public function remover(ListaEquipamentoRequest $request)
    {
        $equipamentos = DB::table('listaequipamentos')
            ->select('listaequipamentos.*')
            ->where('listaequipamentos.id_equipamento', '=', $request->id_equipamento)
            ->where('listaequipamentos.id_personagem', '=', $request->id_personagem)
            ->get();
      
            $equip = $equipamentos[0];
            if($equip->quantidade < $request->quantidade){
                return redirect()->back()->withErrors('Quantidade informada maior do que você possui. Caso queira remover o item do inventário, clique em Deletar Equipamento');
            }
            $this->objUtil->atualizarQuantidade($request, $equip->id, $equip->quantidade, 2);

            return redirect(url("exibirListaEquipamentosTipoConsumivel/$equip->id_personagem"));
        
    }

    public function store(ListaEquipamentoRequest $request)
    {
        $cad = $this->objListaEquipamento->create([
            'id_personagem' => $request->id_personagem,
            'id_equipamento' => $request->id_equipamento,
            'quantidade' => $request->quantidade
        ]);
        if ($cad) {
            return $cad;
        }
    }    

    public function exibirListaEquipamentosTipoConsumivel($id)
    {

        $equipamentos = DB::table('equipamentos')
            ->join('listaequipamentos', 'equipamentos.id', '=', 'listaequipamentos.id_equipamento')
            ->select('equipamentos.*', 'listaequipamentos.id as id_cadastro',  'listaequipamentos.quantidade')
            ->where('listaequipamentos.id_personagem', '=', $id)
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
