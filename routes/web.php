<?php

use App\Http\Controllers\EntrarController;
use App\Http\Controllers\ListaMagiasController;
use App\Http\Controllers\ListaEquipamentosController;
use App\Http\Controllers\MagiasController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\EquipamentosController;

use Illuminate\Support\Facades\Auth;

//Pagina Inicial
Route::get('/', [EntrarController::class, 'indexInicial']);
Route::get('/index', [EntrarController::class, 'indexInicial']);
Route::get('/home', [EntrarController::class, 'indexInicial']);

//Login 
Auth::routes();
Route::get('/entrar', [EntrarController::class, 'logar'])->name('login');
Route::post('/entrar', [EntrarController::class, 'entrar']);

Route::get('/sair', function () {
    Auth::logout();
    return redirect('/entrar');
});

//Personagens
Route::resource('/personagens', PersonagemController::class);
Route::get('/personagens', [PersonagemController::class, 'listar'])
->name('personagens');

//Magias
Route::resource('/magias', MagiasController::class);
Route::get('/magias', [MagiasController::class, 'listar'])
->name('magias');

//Equipamentos
Route::resource('/equipamentos', EquipamentosController::class);
Route::get('/equipamentos', [EquipamentosController::class, 'listar'])
->name('equipamentos');

//Lista de Magias do Personagem
Route::resource('/exibirListaMagias', ListaMagiasController::class);
Route::post('/listamagias', [ListaMagiasController::class, 'store']);

//Lista de Equipamentos do Personagem
Route::resource('/exibirListaEquipamentos', ListaEquipamentosController::class);

Route::get('/exibirListaEquipamentosPorTipo/{id}/{tipo}', 
[ListaEquipamentosController::class, 'exibirListaEquipamentosPorTipo'])
->name('exibirListaEquipamentosPorTipo');

Route::post('/criarAdicionar', [ListaEquipamentosController::class, 'criarAdicionar']);
Route::post('/remover', [ListaEquipamentosController::class, 'remover']);

Route::delete('/destroyEquipamentoPersonagem/{id}/{tipo}', [EquipamentosController::class, 'destroyEquipamentoPersonagem'])
->name('destroyEquipamentoPersonagem');

//Buscas
Route::any('/buscar/Personagens', [PersonagemController::class, 'buscar'])
->name('buscarPersonagens');

Route::any('/buscar/Equipamentos', [EquipamentosController::class, 'buscar'])
->name('buscarEquipamentos');
