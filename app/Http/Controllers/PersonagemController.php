<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classe;
use App\Models\Raca;
use App\Models\Personagem;
use App\Http\Controllers\Util;
use App\Http\Requests\PersonagemRequest;
use App\Models\Equipamento;
use App\Models\ListaMagia;
use App\Models\Magia;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

LengthAwarePaginator::useBootstrap();

class PersonagemController extends Controller
{
    private $objUser;
    private $objPersonagem;
    private $objUtil;
    private $objClasse;
    private $objRaça;
        
    public function __construct()
    {
        $this->middleware('auth');
        $this->objUser=new User();
        $this->objPersonagem=new Personagem();
        $this->objUtil=new Util();
        $this->objMagia=new Magia();
        $this->objListaMagias=new ListaMagia();
        $this->objRaça=new Raca();
        $this->objClasse=new Classe();
        $this->objEquipamento = new Equipamento();
    }
    
    public function listar()
    {
        $usuario = auth()->user();
        $listaPersonagens= Personagem::where('user_id', '=', $usuario->id)
        ->orderByRaw('id')
        ->paginate(5);
        return view('listagemPersonagens', compact('listaPersonagens', 'usuario'));
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
        $classe =$this->objClasse->find($request->classe_id);
        $racas =$this->objRaça->find($request->raca_id);
        $dadoVida =$classe->dado_vida;
        
        $cad=$this->objPersonagem->create([
            'nome'=>$request->nome,
            'classe_id'=>$request->classe_id,
            'raca_id'=>$request->raca_id,
            'forca'=>$request->forca,
            'destreza'=>$request->destreza,
            'constituicao'=>$request->constituicao,
            'inteligencia'=>$request->inteligencia,
            'sabedoria'=>$request->sabedoria,
            'carisma'=>$request->carisma,
            'user_id'=>$usuario->id,
            'vida'=>$this->objUtil->calculaHpInicial($dadoVida, $this->objUtil->converteAtributo($request->constituicao))
            
        ]);
        if($cad){
            return redirect('personagens');
        }
    }

    public function show($id)
    {

       $magias = DB::table('magias')
       ->join('lista_magias', 'magias.id', '=', 'lista_magias.magia_id')
       ->select('magias.*')
       ->where('lista_magias.personagem_id', '=', $id)
       ->get();       

       $equipamentosD = DB::table('equipamentos')
       ->join('lista_equipamentos', 'equipamentos.id', '=', 'lista_equipamentos.equipamento_id')
       ->select('equipamentos.*', 'lista_equipamentos.id as id_cadastro')
       ->where('lista_equipamentos.personagem_id', '=', $id)
       ->where('equipamentos.tipo', '=', 'Defesa')
       ->get();

       $equipamentosA = DB::table('equipamentos')
       ->join('lista_equipamentos', 'equipamentos.id', '=', 'lista_equipamentos.equipamento_id')
       ->select('equipamentos.*', 'lista_equipamentos.id as id_cadastro')
       ->where('lista_equipamentos.personagem_id', '=', $id)
       ->where('equipamentos.tipo', '=', 'Ataque')
       ->get();

       $equipamentosC = DB::table('equipamentos')
       ->join('lista_equipamentos', 'equipamentos.id', '=', 'lista_equipamentos.equipamento_id')
       ->select('equipamentos.*', 'lista_equipamentos.id as id_cadastro')
       ->where('lista_equipamentos.personagem_id', '=', $id)
       ->where('equipamentos.tipo', '=', 'Consumivel')
       ->get();

       $equipamentosO = DB::table('equipamentos')
       ->join('lista_equipamentos', 'equipamentos.id', '=', 'lista_equipamentos.equipamento_id')
       ->select('equipamentos.*', 'lista_equipamentos.id as id_cadastro')
       ->where('lista_equipamentos.personagem_id', '=', $id)
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
        $classe =$this->objClasse->find($request->classe_id);
        $racas =$this->objRaça->find($request->raca_id);
        $dadoVida =$classe->dado_vida;

        $this->objPersonagem->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'classe_id'=>$request->classe_id,
            'raca_id'=>$request->raca_id,
            'forca'=>$request->forca,
            'destreza'=>$request->destreza,
            'constituicao'=>$request->constituicao,
            'inteligencia'=>$request->inteligencia,
            'sabedoria'=>$request->sabedoria,
            'carisma'=>$request->carisma,
            'user_id'=>$usuario->id,
            'vida'=>$this->objUtil->calculaHpInicial($dadoVida, $this->objUtil->converteAtributo($request->constituicao))
        ]);
        return redirect('personagens');
    }

    public function destroy($id)
    {
        $del=$this->objPersonagem->destroy($id);
        return($del) ? "SIM":"NAO";
    }

    public function buscar(Request $busca){

        $filtros = $busca->except('_token');

        $usuario = auth()->user();
        $listaPersonagens = Personagem::where('nome', 'LIKE', "%{$busca->buscar}%")
        ->where('user_id', '=', $usuario->id)
        ->orderByRaw('id')
        ->paginate(5);

        return view('index', compact('listaPersonagens', 'usuario', 'filtros'));

    }

    public function ordenar(String $order){


        $usuario = auth()->user();
        $listaPersonagens= Personagem::where('user_id', '=', $usuario->id)
        ->orderByRaw($order)
        ->paginate(5);
        return view('index', compact('listaPersonagens', 'usuario'));

    }
 }
