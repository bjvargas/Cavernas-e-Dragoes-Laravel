<?php
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

Route::resource('/', BookController::class);
=======

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> a85a714a48297b40d61508cd7146bbde5b1a7ccf
