<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipamentoRequest;
use Illuminate\Pagination\Paginator;
use App\Models\Equipamentos;

Paginator::useBootstrap();

class EquipamentosController extends Controller
{

    private $objEquipamento;

    public function __construct(){

    $this->objEquipamento=new Equipamentos();


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
}
