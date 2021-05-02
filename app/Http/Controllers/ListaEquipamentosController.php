<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaEquipamentoRequest;
use App\Models\Equipamentos;
use App\Models\listaequipamentos;
use App\Models\Personagem;
use Illuminate\Support\Facades\DB;

class ListaEquipamentosController extends Controller
{
    private $objListaEquipamento;
    private $objPersonagem;
    private $objEquipamento;

    public function __construct()
    {
        $this->objListaEquipamento = new listaequipamentos();
        $this->objPersonagem=new Personagem();
        $this->objEquipamento=new Equipamentos();

    }

    public function store(ListaEquipamentoRequest $request)
    {      
        $cad=$this->objListaEquipamento->create([
            'id_personagem'=>$request->id_personagem,
            'id_equipamento'=>$request->id_equipamento
            ]);
        if($cad){
            return redirect(url("exibirListaEquipamentos/$cad->id_personagem"));
        }
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function exibirListaEquipamentos($id)
    {
       
       $equipamentos = DB::table('equipamentos')
       ->join('listaequipamentos', 'equipamentos.id', '=', 'listaequipamentos.id_equipamento')
       ->select('equipamentos.*', 'listaequipamentos.id as id_cadastro')
       ->where('listaequipamentos.id_personagem', '=', $id)
       ->get();

       $todosEquipamentosDefesa=  DB::table('equipamentos')
       ->select('*')
       ->where('equipamentos.tipo', '=', 'Defesa')
       ->get();

       $todosEquipamentosAtaque=  DB::table('equipamentos')
       ->select('*')
       ->where('equipamentos.tipo', '=', 'Ataque')
       ->get();

       $todosEquipamentosConsumivel=  DB::table('equipamentos')
       ->select('*')
       ->where('equipamentos.tipo', '=', 'Consumivel')
       ->get();
    
       $todosEquipamentosOutro= $this->objEquipamento->where('tipo', 'Outro');

         $personagem = $this->objPersonagem->find($id);
        return view('equipamentos.listaEquipamentosDoPersonagem',compact('personagem',
         'equipamentos',
         'todosEquipamentosOutro',
         'todosEquipamentosAtaque',
         'todosEquipamentosDefesa',
         'todosEquipamentosConsumivel'));
    }

}
