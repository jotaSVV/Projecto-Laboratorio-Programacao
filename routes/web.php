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

Route::get('/admin/layout-static', function () {
    return view('admin.layout-static');
});

Route::get('/admin/layout-sidenav-light', function () {
    return view('admin.layout-sidenav-light');
});

Route::get('/admin/charts', function () {
    return view('admin.charts');
});

Route::get('/admin/tables', function () {
    return view('admin.tables');
});


Route::get('/product', function () {
    return view('layouts.novoanuncio');
});

Route::post('/anuncios', [AnunciosController::class, 'store']);

Route::post('/msg', [MensagensController::class, 'store']);

Route::get('/anuncios/show/{anuncio}', [AnunciosController::class, 'show']);
Route::get('/anuncios/edit/{anuncio}', [AnunciosController::class, 'edit']);
Route::post('/anuncios/edit/{anuncio}', [AnunciosController::class, 'update']);
Route::get('/anuncios/delete', [AnunciosController::class, 'delete']);
Route::get('/anuncios/activate/{anuncio}', [AnunciosController::class, 'activate']);


Route::get('/dashboard', function () {
    return view('Utilizadores.utilizadorDash');
});

Route::get('/arquivos', function () {
    return view('Utilizadores.utilizadorDashArquivos');
});




//// chat
Route::get('/chat', function () {
    return view('chat.index');
});

Route::get('/test', function () {
   // New Pusher instance with our config data
    $pusher = new \Pusher(
    config('broadcasting.connections.pusher.key'),
    config('broadcasting.connections.pusher.secret'),
    config('broadcasting.connections.pusher.app_id'),
    config('broadcasting.connections.pusher.options')
);
    

    
// Your data that you would like to send to Pusher
$data = ['text' => 'hello world from Laravel 5.3'];
    
// Sending the data to channel: "test_channel" with "my_event" event
$pusher->trigger( 'my-channel', 'my-event', $data);
    
return 'ok';
});

Route::get('/index', function () {
    return view('users.index');
});