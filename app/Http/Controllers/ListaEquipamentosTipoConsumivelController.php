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

    public function __construct()
    {
        $this->objListaEquipamento = new listaequipamentos();
        $this->objPersonagem=new Personagem();

    }

    public function store(ListaEquipamentoRequest $request)
    {      
        $cad=$this->objListaEquipamento->create([
            'id_personagem'=>$request->id_personagem,
            'id_equipamento'=>$request->id_equipamento
            ]);
        if($cad){
            return redirect(url("exibirListaEquipamentosTipoConsumivel/$cad->id_personagem"));
        }
    }

    public function exibirListaEquipamentosTipoConsumivel($id)
    {
       
       $equipamentos = DB::table('equipamentos')
       ->join('listaequipamentos', 'equipamentos.id', '=', 'listaequipamentos.id_equipamento')
       ->select('equipamentos.*', 'listaequipamentos.id as id_cadastro')
       ->where('listaequipamentos.id_personagem', '=', $id)
       ->where('equipamentos.tipo', '=', 'Consumivel')
       ->get();

        $todosEquipamentosConsumivel=  DB::table('equipamentos')
       ->select('*')
       ->where('equipamentos.tipo', '=', 'Consumivel')
       ->get();

         $personagem = $this->objPersonagem->find($id);
        return view('equipamentos.listaEquipamentosDoPersonagemC',compact('personagem',
         'equipamentos',
         'todosEquipamentosConsumivel'));
    }

}
