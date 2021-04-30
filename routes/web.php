<?php

use App\Http\Controllers\ListaMagiasController;
use App\Http\Controllers\ListaEquipamentosController;
use App\Http\Controllers\MagiasController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\EquipamentosController;


use Illuminate\Support\Facades\Auth;

//Rotas Personagem
Route::resource('/personagens', PersonagemController::class)->middleware('auth');
Route::get('/personagens', [PersonagemController::class, 'index'])->name('personagens')->middleware('auth');


//Rotas Magia
Route::resource('/magias', MagiasController::class)->middleware('auth');
Route::get('/magias', [MagiasController::class, 'index'])->name('magias')->middleware('auth');
Route::get('/exibirListaMagias/{id}', [ListaMagiasController::class, 'exibirListaMagias'])->name('exibirListaMagias')->middleware('auth');
Route::delete('/destroyMagiaPersonagem/{id}', [MagiasController::class, 'destroyMagiaPersonagem'])->name('destroyMagiaPersonagem')->middleware('auth');
Route::post('/listamagias', [ListaMagiasController::class, 'store']);

//Rotas Equipamento
Route::resource('/equipamentos', EquipamentosController::class)->middleware('auth');
Route::post('/listaequipamentos', [ListaEquipamentosController::class, 'store']);
Route::get('/equipamentos', [EquipamentosController::class, 'index'])->name('equipamentos')->middleware('auth');
Route::get('/showListaEquipamentos/{id}', [EquipamentosController::class, 'showListaEquipamentos'])->name('showListaEquipamentos')->middleware('auth');
Route::get('/showListaEquipamentosA/{id}', [EquipamentosController::class, 'showListaEquipamentosA'])->name('showListaEquipamentosA')->middleware('auth');
Route::get('/showListaEquipamentosD/{id}', [EquipamentosController::class, 'showListaEquipamentosD'])->name('showListaEquipamentosD')->middleware('auth');
Route::get('/showListaEquipamentosC/{id}', [EquipamentosController::class, 'showListaEquipamentosC'])->name('showListaEquipamentosC')->middleware('auth');
Route::get('/showListaEquipamentosO/{id}', [EquipamentosController::class, 'showListaEquipamentosO'])->name('showListaEquipamentosO')->middleware('auth');
Route::delete('/destroyEquipamentoPersonagem/{id}', [EquipamentosController::class, 'destroyEquipamentoPersonagem'])->name('destroyEquipamentoPersonagem')->middleware('auth');




Auth::routes();
Route::get('/home', 'HomeController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/entrar', [App\Http\Controllers\EntrarController::class, 'index'])->name('entrar');
Route::post('/entrar', [App\Http\Controllers\EntrarController::class, 'entrar']);

Route::get('/sair', function () {

    Auth::logout();
    return redirect('/entrar');
});