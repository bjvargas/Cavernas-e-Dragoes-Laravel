<?php

use App\Http\Controllers\EntrarController;
use App\Http\Controllers\ListaMagiasController;
use App\Http\Controllers\ListaEquipamentosController;
use App\Http\Controllers\MagiasController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\EquipamentosController;
use App\Http\Controllers\ListaEquipamentosTipoAtaqueController;
use App\Http\Controllers\ListaEquipamentosTipoConsumivelController;
use App\Http\Controllers\ListaEquipamentosTipoDefesaController;
use App\Http\Controllers\ListaEquipamentosTipoOutroController;
use Illuminate\Support\Facades\Auth;

//Pagina Inicial
Route::get('/index', [EntrarController::class, 'indexInicial'])
->name('indexInicial');

//Personagem
Route::resource('/personagens', PersonagemController::class)
->middleware('auth');

Route::get('/personagens', [PersonagemController::class, 'index'])
->name('personagens')
->middleware('auth');


//Magia
Route::resource('/magias', MagiasController::class)
->middleware('auth');

Route::get('/magias', [MagiasController::class, 'index'])
->name('magias')->middleware('auth');

Route::delete('/destroyMagiaPersonagem/{id}', [MagiasController::class, 'destroyMagiaPersonagem'])
->name('destroyMagiaPersonagem')
->middleware('auth');

Route::get('/exibirListaMagias/{id}', [ListaMagiasController::class, 'exibirListaMagias'])
->name('exibirListaMagias')
->middleware('auth');

Route::post('/listamagias', [ListaMagiasController::class, 'store']);

//Equipamento
Route::resource('/equipamentos', EquipamentosController::class)
->middleware('auth');

Route::get('/equipamentos', [EquipamentosController::class, 'index'])
->name('equipamentos')
->middleware('auth');

Route::post('/listaequipamentos', [ListaEquipamentosController::class, 'store'])->middleware('auth');

Route::post('/criarAdicionarA', [ListaEquipamentosTipoAtaqueController::class, 'criarAdicionar'])->middleware('auth');
Route::post('/removerA', [ListaEquipamentosTipoAtaqueController::class, 'remover'])->middleware('auth');
Route::post('/criarAdicionarD', [ListaEquipamentosTipoDefesaController::class, 'criarAdicionar'])->middleware('auth');
Route::post('/removerD', [ListaEquipamentosTipoDefesaController::class, 'remover'])->middleware('auth');
Route::post('/criarAdicionarC', [ListaEquipamentosTipoConsumivelController::class, 'criarAdicionar'])->middleware('auth');
Route::post('/removerC', [ListaEquipamentosTipoConsumivelController::class, 'remover'])->middleware('auth');
Route::post('/criarAdicionarO', [ListaEquipamentosTipoOutroController::class, 'criarAdicionar'])->middleware('auth');
Route::post('/removerO', [ListaEquipamentosTipoOutroController::class, 'remover'])->middleware('auth');

Route::get('/exibirListaEquipamentos/{id}', [ListaEquipamentosController::class, 'exibirListaEquipamentos'])
->name('exibirListaEquipamentos')
->middleware('auth');

Route::get('/exibirListaEquipamentosTipoAtaque/{id}', [ListaEquipamentosTipoAtaqueController::class, 'exibirListaEquipamentosTipoAtaque'])
->name('exibirListaEquipamentosTipoAtaque')
->middleware('auth');

Route::get('/exibirListaEquipamentosTipoDefesa/{id}', [ListaEquipamentosTipoDefesaController::class, 'exibirListaEquipamentosTipoDefesa'])
->name('exibirListaEquipamentosTipoDefesa')
->middleware('auth');

Route::get('/exibirListaEquipamentosTipoConsumivel/{id}', [ListaEquipamentosTipoConsumivelController::class, 'exibirListaEquipamentosTipoConsumivel'])
->name('exibirListaEquipamentosTipoConsumivel')
->middleware('auth');

Route::get('/exibirListaEquipamentosTipoOutro/{id}', [ListaEquipamentosTipoOutroController::class, 'exibirListaEquipamentosTipoOutro'])
->name('exibirListaEquipamentosTipoOutro')
->middleware('auth');

Route::delete('/destroyEquipamentoPersonagem/{id}', [EquipamentosController::class, 'destroyEquipamentoPersonagem'])
->name('destroyEquipamentoPersonagem')
->middleware('auth');


//Login
Auth::routes();
Route::get('/home', 'HomeController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::get('/entrar', [App\Http\Controllers\EntrarController::class, 'index'])
->name('entrar');

Route::post('/entrar', [App\Http\Controllers\EntrarController::class, 'entrar']);

Route::get('/sair', function () {
    Auth::logout();
    return redirect('/entrar');
});

//Busca
Route::any('/buscar/Personagens', [PersonagemController::class, 'buscar'])
->name('buscarPersonagens');

Route::any('/buscar/Equipamentos', [EquipamentosController::class, 'buscar'])
->name('buscarEquipamentos');
