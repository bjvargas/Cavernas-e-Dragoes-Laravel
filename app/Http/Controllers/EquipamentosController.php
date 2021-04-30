<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipamentoRequest;
use Illuminate\Pagination\Paginator;
use App\Models\Equipamentos;
use App\Models\listaequipamentos;
use App\Models\Personagem;
use Illuminate\Support\Facades\DB;


Paginator::useBootstrap();

class EquipamentosController extends Controller
{

    private $objEquipamento;
    private $objListaEquipamentos;
    private $objPersonagem;

    public function __construct(){

    $this->objEquipamento=new Equipamentos();
    $this->objListaEquipamentos=new listaequipamentos();
    $this->objPersonagem=new Personagem();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaEquipamentos=$this->objEquipamento->all();
        return view('equipamentos.equipamentos', compact('listaEquipamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipamentos.createequipamentos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipamentoRequest $request)
    {
        $cad=$this->objEquipamento->create([
            'nome'=>$request->nome,
            'tipo'=>$request->tipo,
            'preco'=>$request->preco,
            'ca'=>$request->ca,
            'forca'=>$request->forca,
            'furtividade'=>$request->boolean('furtividade'),
            'peso'=>$request->peso,
            'dano'=>$request->dano,
            'propriedade'=>$request->propriedade,
            'descricao'=>$request->descricao,
        ]);
        if($cad){
            return redirect("equipamentos");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipamento=$this->objEquipamento->find($id);
        return view('equipamentos.showequipamentos',  compact('equipamento'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showListaEquipamentos($id)
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

    

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showListaEquipamentosD($id)
    {
       
       $equipamentos = DB::table('equipamentos')
       ->join('listaequipamentos', 'equipamentos.id', '=', 'listaequipamentos.id_equipamento')
       ->select('equipamentos.*', 'listaequipamentos.id as id_cadastro')
       ->where('listaequipamentos.id_personagem', '=', $id)
       ->where('equipamentos.tipo', '=', 'Defesa')
       ->get();

        $todosEquipamentosDefesa=  DB::table('equipamentos')
       ->select('*')
       ->where('equipamentos.tipo', '=', 'Defesa')
       ->get();

         $personagem = $this->objPersonagem->find($id);
        return view('equipamentos.listaEquipamentosDoPersonagemD',compact('personagem',
         'equipamentos',
         'todosEquipamentosDefesa'));
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showListaEquipamentosC($id)
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

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showListaEquipamentosO($id)
    {
       
       $equipamentos = DB::table('equipamentos')
       ->join('listaequipamentos', 'equipamentos.id', '=', 'listaequipamentos.id_equipamento')
       ->select('equipamentos.*', 'listaequipamentos.id as id_cadastro')
       ->where('listaequipamentos.id_personagem', '=', $id)
       ->where('equipamentos.tipo', '=', 'Outro')
       ->get();

        $todosEquipamentosOutro=  DB::table('equipamentos')
       ->select('*')
       ->where('equipamentos.tipo', '=', 'Outro')
       ->get();

         $personagem = $this->objPersonagem->find($id);
        return view('equipamentos.listaEquipamentosDoPersonagemO',compact('personagem',
         'equipamentos',
         'todosEquipamentosOutro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editequipamento=$this->objEquipamento->find($id);
        return view('equipamentos.createequipamentos', compact('editequipamento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipamentoRequest $request, $id)
    {
       $this->objEquipamento->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'tipo'=>$request->tipo,
            'preco'=>$request->preco,
            'ca'=>$request->ca,
            'forca'=>$request->forca,
            'furtividade'=>$request->boolean('furtividade'),
            'peso'=>$request->peso,
            'dano'=>$request->dano,
            'propriedade'=>$request->propriedade,
            'descricao'=>$request->descricao,
        ]);
           return redirect("equipamentos");
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del=$this->objEquipamento->destroy($id);
       return($del) ? "SIM" : "NÂO";
    }

    public function destroyEquipamentoPersonagem($id)
    {
        $del=$this->objListaEquipamentos->destroy($id);
        return($del) ? "SIM" : "NÂO";


    }
}
