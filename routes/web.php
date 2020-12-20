<?php

use App\Http\Controllers\UtilizadoresController;
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
    return view('layouts.frontpage');
});


Route::get('/header', function () {
    return view('includes.header');
});

Route::get('/footer', function () {
    return view('includes.footer');
});

Route::get('/register', function () {
    return view('users.register');
});

Route::post('/register',[UtilizadoresController::class, 'store']);

Route::get('/index', function () {
    return view('users.index');
});