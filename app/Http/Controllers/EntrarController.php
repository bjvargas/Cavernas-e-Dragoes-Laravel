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

    public function index()
    {

        return view('entrar.index');
    }

    public function entrar(Request $request)
    {

        if (!Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->back()->withErrors('Erro na autenticação.');
        }
     
        return redirect()->route('personagens');

    }
}
