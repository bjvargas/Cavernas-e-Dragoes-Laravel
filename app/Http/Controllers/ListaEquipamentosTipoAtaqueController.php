<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaEquipamentoRequest;
use App\Models\Equipamentos;
use App\Models\listaequipamentos;
use App\Models\Personagem;
use Illuminate\Support\Facades\DB;

class ListaEquipamentosTipoAtaqueController extends Controller
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
            'id_equipamento'=>$request->id_equipamento,
            'quantidade'=>$request->quantidade
            ]);
        if($cad){
            return redirect(url("exibirListaEquipamentosTipoAtaque/$cad->id_personagem"));
        }
    }

    public function exibirListaEquipamentosTipoAtaque($id)
    {
       
       $equipamentos = DB::table('equipamentos')
       ->join('listaequipamentos', 'equipamentos.id', '=', 'listaequipamentos.id_equipamento')
       ->select('equipamentos.*', 'listaequipamentos.id as id_cadastro')
       ->where('listaequipamentos.id_personagem', '=', $id)
       ->where('equipamentos.tipo', '=', 'Ataque')
       ->get();

        $todosEquipamentosAtaque=  DB::table('equipamentos')
       ->select('*')
       ->where('equipamentos.tipo', '=', 'Ataque')
       ->get();

         $personagem = $this->objPersonagem->find($id);
        return view('equipamentos.listaEquipamentosDoPersonagemA',compact('personagem',
         'equipamentos',
         'todosEquipamentosAtaque'));
    }

}
