<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\EquipamentosController;
use App\Http\Controllers\Teste;
use Illuminate\Support\Facades\Auth;

Route::resource('/personagens', PersonagemController::class)->middleware('auth');
Route::resource('/equipamentos', EquipamentosController::class)->middleware('auth');

Route::get('/personagens', [PersonagemController::class, 'index'])->name('personagens')->middleware('auth');

Route::get('/equipamentos', [EquipamentosController::class, 'index'])->name('equipamentos')->middleware('auth');

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