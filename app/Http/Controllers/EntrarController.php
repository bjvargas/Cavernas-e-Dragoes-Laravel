<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrarController extends Controller
{

    private $objPersonagemController;

    public function __construct()
    {
        $this->objPersonagemController = new PersonagemController();
    }

    public function indexInicial()
    {
        $usuario = auth()->user();

        return view('index',  compact('usuario'));
    }

    public function index()
    {

        return view('entrar.login');
    }

    public function laranja()
    {

        return view('entrar.teste');
    }

    public function entrar(Request $request)
    {

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->back()->withErrors('Erro na autenticação.');
        }
     
        return redirect()->route('personagens');

    }
}
