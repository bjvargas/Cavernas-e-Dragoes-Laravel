<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaEquipamentoRequest;
use App\Models\Equipamento;
use App\Models\ListaEquipamento;
use App\Models\Personagem;
use Illuminate\Support\Facades\DB;

class ListaEquipamentosController extends Controller
{
    private $objListaEquipamento;
    private $objPersonagem;
    private $objEquipamento;

    public function __construct()
    {
        $this->objListaEquipamento = new ListaEquipamento();
        $this->objPersonagem=new Personagem();
        $this->objEquipamento=new Equipamento();

    }

    public function store(ListaEquipamentoRequest $request)
    {      
        $cad=$this->objListaEquipamento->create([
            'personagem_id'=>$request->personagem_id,
            'equipamento_id'=>$request->equipamento_id
            ]);
        if($cad){
            return redirect(url("exibirListaEquipamentos/$cad->personagem_id"));
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
       ->join('lista_equipamentos', 'equipamentos.id', '=', 'lista_equipamentos.equipamento_id')
       ->select('equipamentos.*', 'lista_equipamentos.id as id_cadastro')
       ->where('lista_equipamentos.personagem_id', '=', $id)
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
