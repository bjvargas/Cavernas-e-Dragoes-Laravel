<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaEquipamentoRequest;
use App\Models\listaequipamentos;
use Illuminate\Http\Request;

class ListaEquipamentosController extends Controller
{

    private $objequipamento;
    private $objListaEquipamento;


    public function __construct()
    {
        $this->objListaEquipamento = new listaequipamentos();
    }


    public function store(ListaEquipamentoRequest $request)
    {      
        $cad=$this->objListaEquipamento->create([
            'id_personagem'=>$request->id_personagem,
            'id_equipamento'=>$request->id_equipamento
            ]);
        if($cad){
            return redirect(url("showListaEquipamentosA/$cad->id_personagem"));
        }
    }


    public function showListaEquipamentosA($id)
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
