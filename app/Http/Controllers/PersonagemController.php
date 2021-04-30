<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request; - POdecequeerro branch7
use App\Models\User;
use App\Models\Personagem;
use App\Http\Controllers\Util;
use App\Http\Requests\PersonagemRequest;
use App\Models\Equipamentos;
use App\Models\listamagias;
use App\Models\listaequipamentos;
use App\Models\Magia;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

Paginator::useBootstrap();

class PersonagemController extends Controller
{
    private $objUser;
    private $objPersonagem;
    private $objUtil;
    private $objMagia;
    private $objListaMagias;
    private $objListaEquipamentos;
        
    public function __construct()
    {
        $this->objUser=new User();
        $this->objPersonagem=new Personagem();
        $this->objUtil=new Util();
        $this->objMagia=new Magia();
        $this->objListaMagias=new listamagias();
        $this->objListaEquipamentos=new listaequipamentos();
        $this->objEquipamento = new Equipamentos();


    }
    
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $usuario = auth()->user();

        $listaPersonagens= Personagem::where('id_user', '=', $usuario->id)
        ->paginate(5);


        return view('index', compact('listaPersonagens', 'usuario'));
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
        $usuario = auth()->user();

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
            'id_user'=>$usuario->id,
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

       $magias = DB::table('magias')
       ->join('listamagias', 'magias.id', '=', 'listamagias.id_magia')
       ->select('magias.*')
       ->where('listamagias.id_personagem', '=', $id)
       ->get();       

       $equipamentosD = DB::table('equipamentos')
       ->join('listaequipamentos', 'equipamentos.id', '=', 'listaequipamentos.id_equipamento')
       ->select('equipamentos.*', 'listaequipamentos.id as id_cadastro')
       ->where('listaequipamentos.id_personagem', '=', $id)
       ->where('equipamentos.tipo', '=', 'Defesa')
       ->get();

       $equipamentosA = DB::table('equipamentos')
       ->join('listaequipamentos', 'equipamentos.id', '=', 'listaequipamentos.id_equipamento')
       ->select('equipamentos.*', 'listaequipamentos.id as id_cadastro')
       ->where('listaequipamentos.id_personagem', '=', $id)
       ->where('equipamentos.tipo', '=', 'Ataque')
       ->get();

       $equipamentosC = DB::table('equipamentos')
       ->join('listaequipamentos', 'equipamentos.id', '=', 'listaequipamentos.id_equipamento')
       ->select('equipamentos.*', 'listaequipamentos.id as id_cadastro')
       ->where('listaequipamentos.id_personagem', '=', $id)
       ->where('equipamentos.tipo', '=', 'Consumivel')
       ->get();

       $equipamentosO = DB::table('equipamentos')
       ->join('listaequipamentos', 'equipamentos.id', '=', 'listaequipamentos.id_equipamento')
       ->select('equipamentos.*', 'listaequipamentos.id as id_cadastro')
       ->where('listaequipamentos.id_personagem', '=', $id)
       ->where('equipamentos.tipo', '=', 'Outro')
       ->get();

         $personagem = $this->objPersonagem->find($id);
        return view('show',compact('personagem', 'magias', 'equipamentosA', 'equipamentosD', 'equipamentosC', 'equipamentosO'));
    }

       
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $personagem=$this->objPersonagem->find($id);
       $users=$this->objUser->all();
       return view('create',compact('personagem','users'));
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
        $usuario = auth()->user();

        $this->objPersonagem->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'classe'=>$request->classe,
            'raca'=>$request->raca,
            'forca'=>$request->forca,
            'destreza'=>$request->destreza,
            'constituicao'=>$request->constituicao,
            'inteligencia'=>$request->inteligencia,
            'sabedoria'=>$request->sabedoria,
            'carisma'=>$request->carisma,
            'id_user'=>$usuario->id,
            'vida'=>$this->objUtil->calculaHpInicial($request->classe, $this->objUtil->converteAtributo($request->constituicao))
        ]);
        return redirect('personagens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objPersonagem->destroy($id);
        return($del) ? "SIM":"NAO";
    }
 }
