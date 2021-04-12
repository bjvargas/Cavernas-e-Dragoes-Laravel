<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request; - POdecequeerro branch7
use App\Models\User;
use App\Models\Personagem;
use App\Http\Controllers\Util;
use App\Http\Requests\PersonagemRequest;

class BookController extends Controller
{
    private $objUser;
    private $objPersonagem;
    private $objUtil;
        
    public function __construct()
    {
        $this->objUser=new User();
        $this->objPersonagem=new Personagem();
        $this->objUtil=new Util();

    }
    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $listaPersonagens=$this->objPersonagem->all();
        return view('index', compact('listaPersonagens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->objUser->all();
        return view('create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonagemRequest $request)
    {
        $cad=$this->objPersonagem->create([
            'nome'=>$request->nome,
            'classe'=>$request->classe,
            'raca'=>$request->raca,
            'forca'=>$request->forca,
            'destreza'=>$request->destreza,
            'constituicao'=>$request->constituicao,
            'inteligencia'=>$request->inteligencia,
            'sabedoria'=>$request->sabedoria,
            'carisma'=>$request->carisma,
            'id_user'=>$request->id_user,
            'vida'=>$this->objUtil->calculaHpInicial($request->classe, $this->objUtil->converteAtributo($request->constituicao))
        ]);
        if($cad){
            return redirect('personagens');
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
        $personagem=$this->objPersonagem->find($id);
        return view('show',compact('personagem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PersonagemRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 }
