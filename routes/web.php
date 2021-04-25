<?php

use App\Http\Controllers\MagiasController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\Teste;
use Illuminate\Support\Facades\Auth;

Route::resource('/magias', MagiasController::class);
Route::resource('/personagens', PersonagemController::class)->middleware('auth');

Route::get('/personagens', [PersonagemController::class, 'index'])->name('personagens')->middleware('auth');

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