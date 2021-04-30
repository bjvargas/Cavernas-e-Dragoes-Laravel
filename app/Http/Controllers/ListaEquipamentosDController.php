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


    public function index()
    {
        //
    }

    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ListaEquipamentoRequest $request)
    {      
        $cad=$this->objListaEquipamento->create([
            'id_personagem'=>$request->id_personagem,
            'id_equipamento'=>$request->id_equipamento
            ]);
        if($cad){
            return redirect(url("showListaEquipamentosD/$cad->id_personagem"));
        }
    }

    public function show($id)
    {
       
    }

    public function edit($id)
    {
        
    }

 

    public function destroy($id)
    {
        
    }




}
