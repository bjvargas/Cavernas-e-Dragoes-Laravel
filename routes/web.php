<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\Teste;

Route::resource('/personagens', PersonagemController::class)->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
