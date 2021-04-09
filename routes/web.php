<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

Route::resource('/', BookController::class);
