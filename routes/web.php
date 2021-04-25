<?php

use App\Http\Controllers\MagiasController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonagemController;
use App\Http\Controllers\Teste;

Route::resource('/personagens', PersonagemController::class);
Route::resource('/teste', Teste::class);
Route::resource('/magias', MagiasController::class);

