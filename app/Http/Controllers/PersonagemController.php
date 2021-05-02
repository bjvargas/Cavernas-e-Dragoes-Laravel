<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request; - POdecequeerro branch7
use App\Models\User;
use App\Models\Classes;
use App\Models\Personagem;
use App\Http\Controllers\Util;
use App\Http\Requests\PersonagemRequest;
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
        
    public function __construct()
    {
        $this->objUser=new User();
        $this->objPersonagem=new Personagem();
        $this->objUtil=new Util();
        $this->objMagia=new Magia();
        $this->objListaMagias=new listamagias();
        $this->objClasse=new Classes();
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
        $classes=$this->objClasse->all();
        $users=$this->objUser->all();
        return view('create', compact('users','classes'));
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
        $classe =$this->objClasse->find($request->id_classe);
        $dadoVida =$classe->dado_vida;
        
        $cad=$this->objPersonagem->create([
            'nome'=>$request->nome,
            'id_classe'=>$request->id_classe,
            'raca'=>$request->raca,
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

         $personagem = $this->objPersonagem->find($id);
        return view('show',compact('personagem', 'magias'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showListaMagias($id)
    {
       
       $magias = DB::table('magias')
       ->join('listamagias', 'magias.id', '=', 'listamagias.id_magia')
       ->select('magias.*', 'listamagias.id as id_cadastro')
       ->where('listamagias.id_personagem', '=', $id)
       ->get();

       $todasMagias = DB::table('magias')
       ->leftJoin('listamagias', 'magias.id', '=', 'listamagias.id_magia')
       ->select('magias.*', 'listamagias.id_magia')
       ->whereNotIn('magias.id', function($q) use ($id) {
        $q->select('id_magia')->from('listamagias')
        ->where('id_personagem', '=', $id);
         })->get();
           
         $personagem = $this->objPersonagem->find($id);
        return view('magia.listaMagiasDoPersonagem',compact('personagem', 'magias', 'todasMagias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $classes=$this->objClasse->all();
       $personagem=$this->objPersonagem->find($id);
       $users=$this->objUser->all();
       return view('create',compact('personagem','users','classes'));
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
        $classe =$this->objClasse->find($request->id_classe);
        $dadoVida =$classe->dado_vida;

        $this->objPersonagem->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'id_classe'=>$request->id_classe,
            'raca'=>$request->raca,
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
