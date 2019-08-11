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
Route::get('/plantas', function () {
    return view('index');
});
Route::get('/plants1', function () {
    return view('plantas1');
});

Route::get('/plants2', function () {
    return view('plantas2');
});

Route::get('/plants3', function () {
    return view('plantas3');
});

Route::get('/plants4', function () {
    return view('plantas4');
});


Route::get('arbust1', function () {
    return view('arbusto1');
});

Route::get('arbust2', function () {
    return view('arbusto2');
});
Route::get('arbust3', function () {
    return view('arbusto3');
});
Route::get('arbust4', function () {
    return view('arbusto4');
});
Route::get('arbust5', function () {
    return view('arbusto5');
});
Route::get('arbust6', function () {
    return view('arbusto6');
});
Route::get('arbust7', function () {
    return view('arbusto7');
});
Route::get('arbust8', function () {
    return view('arbusto8');
});
Route::get('arbust9', function () {
    return view('arbusto9');
});
Route::get('trepar1', function () {
    return view('trepadoras1');
});
Route::get('trepar2', function () {
    return view('trepadoras2');
});
Route::get('trepar3', function () {
    return view('trepadoras3');
});
Route::get('trepar4', function () {
    return view('trepadoras4');
});
Route::get('trepar5', function () {
    return view('trepadoras5');
});
Route::get('trepar6', function () {
    return view('trepadoras6');
});
Route::get('trepar7', function () {
    return view('trepadoras7');
});
Route::get('trepar8', function () {
    return view('trepadoras8');
});
    Route::get('arbol1', function () {
    return view('arboles1');
});
Route::get('arbol2', function () {
    return view('arboles2');
});
Route::get('arbol3', function () {
    return view('arboles3');
});
Route::get('arbol4', function () {
    return view('arboles4');
});
Route::get('arbol5', function () {
    return view('arboles5');
});
Route::get('arbol6', function () {
    return view('arboles6');
});
Route::get('arbol7', function () {
    return view('arboles7');
});
Route::get('arbol8', function () {
    return view('arboles8');
});
Route::get('contactenos', function () {
    return view('contactos');
});
Route::post('comentario','llenardatos@guardar');