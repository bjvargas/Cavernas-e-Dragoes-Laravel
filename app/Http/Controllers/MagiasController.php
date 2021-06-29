<?php

namespace App\Http\Controllers;

use App\Http\Requests\MagiaRequest;
use App\Models\ListaMagia;
use App\Models\Magia;
use Illuminate\Pagination\LengthAwarePaginator;

LengthAwarePaginator::useBootstrap();

class MagiasController extends Controller
{
    private $objMagia;
    private $objListaMagia;

    public function __construct()
    {
        $this->middleware('auth');
        $this->objMagia = new Magia();
        $this->objListaMagia = new ListaMagia();
    }


    public function listar()
    {
        $magia = $this->objMagia->paginate(5);
        return view('magia.indexmagia', compact('magia'));
    }

    public function create()
    {
        return view('magia.createmagia');
    }

    public function store(MagiaRequest $request)
    {

        $cad = $this->objMagia->create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'level' => $request->level,
            'escola' => $request->escola,
            'tempodeconjuracao' => $request->tempodeconjuracao,
            'alcance' => $request->alcance,
            'componentes' => $request->componentes,
            'verbal' => $request->boolean('verbal'),
            'somatico' => $request->boolean('somatico'),
            'material' => $request->boolean('material'),
            'duracao' => $request->duracao,
            'classe' => $request->classe,
            'levelmaior' => $request->levelmaior
        ]);
        if ($cad) {
            return redirect('magias');
        }
    }

    public function show($id)
    {
        $magia = $this->objMagia->find($id);
        return view('magia.showmagia', compact('magia'));
    }

    public function edit($id)
    {
        $magia = $this->objMagia->find($id);
        return view('magia.createmagia', compact('magia'));
    }

    public function update(MagiaRequest $request, $id)
    {
        $this->objMagia->where(['id' => $id])->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'level' => $request->level,
            'escola' => $request->escola,
            'tempodeconjuracao' => $request->tempodeconjuracao,
            'alcance' => $request->alcance,
            'componentes' => $request->componentes,
            'verbal' => $request->boolean('verbal'),
            'somatico' => $request->boolean('somatico'),
            'material' => $request->boolean('material'),
            'duracao' => $request->duracao,
            'classe' => $request->classe,
            'levelmaior' => $request->levelmaior
        ]);
        return redirect('magias');
    }

    public function destroy($id)
    {
        $del = $this->objMagia->destroy($id);
        return ($del) ? "SIM" : "NAO";
    }
    
}
