<?php

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

Route::resource('saporipizza', 'PaginasController');

Route::get('/registro', function () {
    return view('pizza.login');
});
Route::get('/ingreso', function () {
    return view('pizza.alertLogin');
});
Route::get('/sapori/inicio', function () {
    return view('pizza.principal');
});
Route::get('/sapori/pedido', function () {
    return view('pizza.domicilio');
});
Route::get('/sapori/cuenta', function () {
    return view('pizza.usuprincipal');
});
Route::get('/cuenta/informacion', function () {
    return view('pizza.usuinformacion');
});
Route::get('/cuenta/historial', function () {
    return view('pizza.usuhistorial');
});
Route::get('/cuenta/pedido', function () {
    return view('pizza.usudomicilio');
});
Route::get('/administrador', function () {
    return view('pizza.administrador');
});

