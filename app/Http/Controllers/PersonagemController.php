<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classes;
use App\Models\Raca;
use App\Models\Personagem;
use App\Http\Controllers\Util;
use App\Http\Requests\PersonagemRequest;
use App\Models\Equipamentos;
use App\Models\listamagias;
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
    private $objClasse;
    private $objRaça;
        
    public function __construct()
    {
        $this->objUser=new User();
        $this->objPersonagem=new Personagem();
        $this->objUtil=new Util();
        $this->objMagia=new Magia();
        $this->objListaMagias=new listamagias();
        $this->objRaça=new Raca();
        $this->objClasse=new Classes();
        $this->objEquipamento = new Equipamentos();
    }
    
    public function index()
    {
        $usuario = auth()->user();
        $listaPersonagens= Personagem::where('id_user', '=', $usuario->id)
        ->paginate(5);
        return view('index', compact('listaPersonagens', 'usuario'));
    }

    public function create()
    {
        $racas=$this->objRaça->all();
        $classes=$this->objClasse->all();
        $users=$this->objUser->all();
        return view('create', compact('users','classes','racas'));
    }

    public function store(PersonagemRequest $request)
    {
        $usuario = auth()->user();
        $classe =$this->objClasse->find($request->id_classe);
        $racas =$this->objRaça->find($request->id_raca);
        $dadoVida =$classe->dado_vida;
        
        $cad=$this->objPersonagem->create([
            'nome'=>$request->nome,
            'id_classe'=>$request->id_classe,
            'id_raca'=>$request->id_raca,
            'forca'=>$request->forca,
            'destreza'=>$request->destreza,
            'constituicao'=>$request->constituicao,
            'inteligencia'=>$request->inteligencia,
            'sabedoria'=>$request->sabedoria,
            'carisma'=>$request->carisma,
            'id_user'=>$usuario->id,
            'vida'=>$this->objUtil->calculaHpInicial($dadoVida, $this->objUtil->converteAtributo($request->constituicao))
            
        ]);
        if($cad){
            return redirect('personagens');
        }
    }

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

    public function edit($id)
    {
       $racas=$this->objRaça->all();
       $classes=$this->objClasse->all();
       $personagem=$this->objPersonagem->find($id);
       $users=$this->objUser->all();
       return view('create',compact('personagem','users','classes','racas'));
    }

    public function update(PersonagemRequest $request, $id)
    {
        $usuario = auth()->user();
        $classe =$this->objClasse->find($request->id_classe);
        $racas =$this->objRaça->find($request->id_raca);
        $dadoVida =$classe->dado_vida;

        $this->objPersonagem->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'id_classe'=>$request->id_classe,
            'id_raca'=>$request->id_raca,
            'forca'=>$request->forca,
            'destreza'=>$request->destreza,
            'constituicao'=>$request->constituicao,
            'inteligencia'=>$request->inteligencia,
            'sabedoria'=>$request->sabedoria,
            'carisma'=>$request->carisma,
            'id_user'=>$usuario->id,
            'vida'=>$this->objUtil->calculaHpInicial($dadoVida, $this->objUtil->converteAtributo($request->constituicao))
        ]);
        return redirect('personagens');
    }

    public function destroy($id)
    {
        $del=$this->objPersonagem->destroy($id);
        return($del) ? "SIM":"NAO";
    }
 }
