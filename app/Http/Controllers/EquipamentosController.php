<?php

namespace App\Http\Controllers;

use App\Http\Requests\EquipamentoRequest;
use Illuminate\Pagination\Paginator;
use App\Models\Equipamentos;
use App\Models\listaequipamentos;
use Illuminate\Http\Request;


Paginator::useBootstrap();

class EquipamentosController extends Controller
{

    private $objEquipamento;
    private $objListaEquipamentos;

    public function __construct()
    {
        $this->middleware('auth');
        $this->objEquipamento = new Equipamentos();
        $this->objListaEquipamentos = new listaequipamentos();
    }

    public function listar()
    {
        $listaEquipamentos = $this->objEquipamento
            ->paginate(10);
        return view('equipamentos.equipamentos', compact('listaEquipamentos'));
    }

    public function create()
    {
        return view('equipamentos.createequipamentos');
    }

    public function store(EquipamentoRequest $request)
    {
        $cad = $this->objEquipamento->create([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'preco' => $request->preco,
            'ca' => $request->ca,
            'forca' => $request->forca,
            'furtividade' => $request->boolean('furtividade'),
            'peso' => $request->peso,
            'dano' => $request->dano,
            'propriedade' => $request->propriedade,
            'descricao' => $request->descricao,
        ]);
        if ($cad) {
            return redirect("equipamentos");
        }
    }

    public function show($id)
    {
        $equipamento = $this->objEquipamento->find($id);
        return view('equipamentos.showequipamentos',  compact('equipamento'));
    }

    public function edit($id)
    {
        $editequipamento = $this->objEquipamento->find($id);
        return view('equipamentos.createequipamentos', compact('editequipamento'));
    }

    public function update(EquipamentoRequest $request, $id)
    {
        $this->objEquipamento->where(['id' => $id])->update([
            'nome' => $request->nome,
            'tipo' => $request->tipo,
            'preco' => $request->preco,
            'ca' => $request->ca,
            'forca' => $request->forca,
            'furtividade' => $request->boolean('furtividade'),
            'peso' => $request->peso,
            'dano' => $request->dano,
            'propriedade' => $request->propriedade,
            'descricao' => $request->descricao,
        ]);
        return redirect("equipamentos");
    }

    public function destroy($id)
    {
        $del = $this->objEquipamento->destroy($id);
        return ($del) ? "SIM" : "NÂO";
    }

    public function destroyEquipamentoPersonagem($id)
    {
        $del = $this->objListaEquipamentos->destroy($id);
        return ($del) ? "SIM" : "NÂO";
    }

    public function buscar(Request $busca)
    {

        $filtros = $busca->except('_token');
        $listaEquipamentos = $this->objEquipamento
            ->paginate(10);

        if ($busca->buscaE == 'buscaNome') {
            $listaEquipamentos = Equipamentos::where('nome', 'LIKE', "%{$busca->buscar}%")
                ->orderByRaw('id')
                ->paginate(5);
        } else if ($busca->buscaE == 'buscaTipo') {
            $listaEquipamentos = Equipamentos::where('tipo', 'LIKE', "%{$busca->buscar}%")
                ->orderByRaw('id')
                ->paginate(5);
        } else if ($busca->buscaE == 'buscaPreco') {
            $listaEquipamentos = Equipamentos::where('preco', 'LIKE', "%{$busca->buscar}%")
                ->orderByRaw('id')
                ->paginate(5);
        }
        //dd($busca);
        return view('equipamentos.equipamentos', compact('listaEquipamentos', 'filtros'));
    }
}
