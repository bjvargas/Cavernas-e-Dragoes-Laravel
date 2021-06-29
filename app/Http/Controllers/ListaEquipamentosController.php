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
    private $objUtil;

    public function __construct()
    {
        $this->middleware('auth');
        $this->objUtil=new Util();
        $this->objListaEquipamento = new ListaEquipamento();
        $this->objPersonagem=new Personagem();
        $this->objEquipamento=new Equipamento();

    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
       $equipamentos = DB::table('equipamentos')
       ->join('lista_equipamentos', 'equipamentos.id', '=', 'lista_equipamentos.equipamento_id')
       ->select('equipamentos.*', 'lista_equipamentos.id as id_cadastro',  'lista_equipamentos.quantidade')
       ->where('lista_equipamentos.personagem_id', '=', $id)
       ->get();      
    
       $todosEquipamentosOutro= $this->objEquipamento->where('tipo', 'Outro');

         $personagem = $this->objPersonagem->find($id);
        return view('equipamentos.listaEquipamentosDoPersonagem',compact('personagem',
         'equipamentos' ));
    }

    public function exibirListaEquipamentosPorTipo($id, $tipo)
    {
       
       $equipamentos = DB::table('equipamentos')
       ->join('lista_equipamentos', 'equipamentos.id', '=', 'lista_equipamentos.equipamento_id')
       ->select('equipamentos.*', 'lista_equipamentos.id as id_cadastro',  'lista_equipamentos.quantidade')
       ->where('lista_equipamentos.personagem_id', '=', $id)
       ->where('equipamentos.tipo', '=', $tipo)
       ->get();

        $todosEquipamentos=  DB::table('equipamentos')
       ->select('*')
       ->where('equipamentos.tipo', '=', $tipo)
       ->get();

         $personagem = $this->objPersonagem->find($id);

         
        return view('equipamentos.listaEquipamentosPorTipo',compact('personagem',
         'equipamentos',
         'todosEquipamentos'));
    }

    public function store(ListaEquipamentoRequest $request)
    {      
        $cad=$this->objListaEquipamento->create([
            'personagem_id'=>$request->personagem_id,
            'equipamento_id'=>$request->equipamento_id,
            'quantidade'=>$request->quantidade
            ]);
            if ($cad) {
                return $cad;
            }
    }

    public function remover(ListaEquipamentoRequest $request)
    {
        $equipamentos = DB::table('lista_equipamentos')
            ->select('lista_equipamentos.*')
            ->where('lista_equipamentos.equipamento_id', '=', $request->equipamento_id)
            ->where('lista_equipamentos.personagem_id', '=', $request->personagem_id)
            ->get();
      
            $equip = $equipamentos[0];
            if($equip->quantidade < $request->quantidade){
                return redirect()->back()->withErrors('Quantidade informada maior do que você possui. Caso queira remover o item do inventário, clique em Deletar Equipamento');
            }
            $this->objUtil->atualizarQuantidade($request, $equip->id, $equip->quantidade, 2);

            return redirect(url("exibirListaEquipamentosPorTipo/$equip->personagem_id/$request->tipo"));
        
    }

    public function criarAdicionar(ListaEquipamentoRequest $request)
    {
        if($request->quantidade < 1){
            return redirect()->back()->withErrors('Você deve informar no mínimo 1 item.');
        }
        if($request->quantidade > 9999){
            return redirect()->back()->withErrors('Limite máximo: 9999');
        }
        $equipamento = DB::table('lista_equipamentos')
            ->select('lista_equipamentos.*')
            ->where('lista_equipamentos.equipamento_id', '=', $request->equipamento_id)
            ->where('lista_equipamentos.personagem_id', '=', $request->personagem_id)
            ->count();         

        if ($equipamento == 0) {
            $cad = $this->store($request);
            if ($cad) {
                return redirect(url("exibirListaEquipamentosPorTipo/$cad->personagem_id/$request->tipo"));
            }
        } else {
            
            $equipamentos = DB::table('lista_equipamentos')
            ->select('lista_equipamentos.*')
            ->where('lista_equipamentos.equipamento_id', '=', $request->equipamento_id)
            ->where('lista_equipamentos.personagem_id', '=', $request->personagem_id)
            ->get();  

            $equip = $equipamentos[0];
            $this->objUtil->atualizarQuantidade($request, $equip->id, $equip->quantidade, 1);

            return redirect(url("exibirListaEquipamentosPorTipo/$equip->personagem_id/$request->tipo"));
        }
    }

}
