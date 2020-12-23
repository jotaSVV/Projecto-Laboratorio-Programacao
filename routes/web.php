<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UtilizadoresController;

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
    return view('layouts.frontpage');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/cars', function () {
    return view('layouts.cars');
});




////Rotas Relativas aos Utilizadores


Route::get('/dashboard', function () {
    return view('Utilizadores.utilizadorDash');
});

Route::get('/dashboard/definicoes', function () {
    return view('Utilizadores.utilizadorDashDef');
});

Route::get('/dashboard/edit/{utilizadores}', [UtilizadoresController::class, 'edit']);
Route::post('/dashboard/definicoes/update/{utilizadores}', [UtilizadoresController::class, 'update']);
Route::post('/dashboard/definicoes/updateemail/{utilizadores}', [UtilizadoresController::class, 'updateemail']);
Route::post('/dashboard/definicoes/updatepassword/{utilizadores}', [UtilizadoresController::class, 'updatepassword']);



Route::get('/header', function () {
    return view('includes.header');
});


Route::get('/footer', function () {
    return view('includes.footer');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
