<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaMagiaRequest;
use App\Models\listamagias;
use Illuminate\Http\Request;

class ListaMagiasController extends Controller
{

    private $objMagia;
    private $objListaMagia;


    public function __construct()
    {
        $this->objListaMagia = new listamagias();
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
    public function store(ListaMagiaRequest $request)
    {      
        $cad=$this->objListaMagia->create([
            'id_personagem'=>$request->id_personagem,
            'id_magia'=>$request->id_magia
            ]);
        if($cad){
            return redirect(url("showListaMagias/$cad->id_personagem"));
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
