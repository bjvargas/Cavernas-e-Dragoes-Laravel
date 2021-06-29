<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListaMagiaRequest;
use App\Models\ListaMagia;
use App\Models\Personagem;
use Illuminate\Support\Facades\DB;

class ListaMagiasController extends Controller
{
    private $objListaMagia;
    private $objPersonagem;

    public function __construct()
    {
        $this->objListaMagia = new ListaMagia();
        $this->objPersonagem=new Personagem();

    }

    public function store(ListaMagiaRequest $request)
    {
        $cad = $this->objListaMagia->create([
            'personagem_id' => $request->personagem_id,
            'magia_id' => $request->magia_id
        ]);
        if ($cad) {
            return redirect(url("exibirListaMagias/$cad->personagem_id"));
        }
    }

    public function exibirListaMagias($id)
    {

        $magias = DB::table('magias')
            ->join('lista_magias', 'magias.id', '=', 'lista_magias.magia_id')
            ->select('magias.*', 'lista_magias.id as id_cadastro')
            ->where('lista_magias.personagem_id', '=', $id)
            ->get();

        $todasMagias = DB::table('magias')
            ->leftJoin('lista_magias', 'magias.id', '=', 'lista_magias.magia_id')
            ->select('magias.*', 'lista_magias.magia_id')
            ->whereNotIn('magias.id', function ($q) use ($id) {
                $q->select('magia_id')->from('lista_magias')
                    ->where('personagem_id', '=', $id);
            })->get();

        $personagem = $this->objPersonagem->find($id);
        return view('magia.listaMagiasDoPersonagem', compact('personagem', 'magias', 'todasMagias'));
    }
}
