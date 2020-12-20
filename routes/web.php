<?php

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

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/cars', function () {
    return view('layouts.cars');
});


Route::get('/header', function () {
    return view('includes.header');
});

Route::get('/footer', function () {
    return view('includes.footer');
});