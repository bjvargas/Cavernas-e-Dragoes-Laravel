<?php

use App\Http\Controllers\ListaMagiasController;
use App\Http\Controllers\MagiasController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonagemController;
use Illuminate\Support\Facades\Auth;

Route::resource('/magias', MagiasController::class)->middleware('auth');
Route::resource('/personagens', PersonagemController::class)->middleware('auth');

Route::post('/listamagias', [ListaMagiasController::class, 'store']);
Route::get('/personagens', [PersonagemController::class, 'index'])->name('personagens')->middleware('auth');
Route::get('/magias', [MagiasController::class, 'index'])->name('magias')->middleware('auth');
Route::get('/showListaMagias/{id}', [PersonagemController::class, 'showListaMagias'])->name('showListaMagias')->middleware('auth');
Route::delete('/destroyMagiaPersonagem/{id}', [MagiasController::class, 'destroyMagiaPersonagem'])->name('destroyMagiaPersonagem')->middleware('auth');

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