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

Route::get('/', ['uses' => 'Controller@homepage']);


Route::get('/', function () {
   return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/consulta', ['uses'=>'HomeController@consulta','as'=>'consultaUsuario.index']);
//Route::get('/exame', ['uses'=>'HomeController@exame','as'=>'exame.index']);
Route::get('/exame', ['uses'=>'ExamesController@listaExame','as'=>'exame.index']);
Route::get('/perfil', ['uses'=>'HomeController@perfil','as'=>'perfil.index']);
Route::post('/perfil', ['uses'=>'HomeController@perfilAtualiza','as'=>'perfil.index']);
Route::get('/agenda', ['uses'=>'HomeController@agenda','as'=>'agenda.index']);
