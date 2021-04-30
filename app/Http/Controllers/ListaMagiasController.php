<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaMagiaRequest;
use App\Models\listamagias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListaMagiasController extends Controller
{
    private $objListaMagia;

    public function __construct()
    {
        $this->objListaMagia = new listamagias();
    }

    public function store(ListaMagiaRequest $request)
    {
        $cad = $this->objListaMagia->create([
            'id_personagem' => $request->id_personagem,
            'id_magia' => $request->id_magia
        ]);
        if ($cad) {
            return redirect(url("exibirListaMagias/$cad->id_personagem"));
        }
    }

    public function exibirListaMagias($id)
    {

        $magias = DB::table('magias')
            ->join('listamagias', 'magias.id', '=', 'listamagias.id_magia')
            ->select('magias.*', 'listamagias.id as id_cadastro')
            ->where('listamagias.id_personagem', '=', $id)
            ->get();

        $todasMagias = DB::table('magias')
            ->leftJoin('listamagias', 'magias.id', '=', 'listamagias.id_magia')
            ->select('magias.*', 'listamagias.id_magia')
            ->whereNotIn('magias.id', function ($q) use ($id) {
                $q->select('id_magia')->from('listamagias')
                    ->where('id_personagem', '=', $id);
            })->get();

        $personagem = $this->objPersonagem->find($id);
        return view('magia.listaMagiasDoPersonagem', compact('personagem', 'magias', 'todasMagias'));
    }
}
