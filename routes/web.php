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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//RUTAS CarreraController
Route::get('/carreraDatosIdentificacion/{campus}', 'CarreraController@carreraDatosIdentificacion');
Route::get('/carreraI1/{campus}/{carrera}', 'CarreraController@carreraI1');
Route::get('/carreraI2/{campus}/{carrera}', 'CarreraController@carreraI2');
Route::get('/carreraI3/{campus}/{carrera}', 'CarreraController@carreraI3');
Route::get('/carreraI4/{campus}/{carrera}', 'CarreraController@carreraI4');
Route::get('/carreraII1/{campus}/{carrera}', 'CarreraController@carreraII1');
Route::get('/carreraII2/{campus}/{carrera}', 'CarreraController@carreraII2');
Route::get('/carreraIII1/{campus}/{carrera}', 'CarreraController@carreraIII1');
Route::get('/carreraIII2/{campus}/{carrera}', 'CarreraController@carreraIII2');
Route::get('/carreraIII3/{campus}/{carrera}', 'CarreraController@carreraIII3');
Route::get('/carreraIV1/{campus}/{carrera}', 'CarreraController@carreraIV1');
Route::get('/carreraIV2/{campus}/{carrera}', 'CarreraController@carreraIV2');
Route::get('/carreraIV3/{campus}/{carrera}', 'CarreraController@carreraIV3');
Route::get('/carreraIV4/{campus}/{carrera}', 'CarreraController@carreraIV4');
Route::get('/carreraIV5/{campus}/{carrera}', 'CarreraController@carreraIV5');
Route::get('/carreraIV6/{campus}/{carrera}', 'CarreraController@carreraIV6');
Route::get('/carreraV1', 'CarreraController@carreraV1');
Route::get('/carreraV2/{campus}/{carrera}', 'CarreraController@carreraV2');
Route::get('/carreraV3/{campus}/{carrera}', 'CarreraController@carreraV3');
Route::get('/carreraV4/{campus}/{carrera}', 'CarreraController@carreraV4');
Route::get('/carreraV5/{campus}/{carrera}', 'CarreraController@carreraV5');
Route::get('/carreraV6/{campus}/{carrera}', 'CarreraController@carreraV6');
Route::get('/carreraVI1/{campus}/{carrera}', 'CarreraController@carreraVI1');
Route::get('/carreraVI2/{campus}/{carrera}', 'CarreraController@carreraVI2');
Route::get('/carreraVI3/{campus}/{carrera}', 'CarreraController@carreraVI3');
Route::get('/carreraVI4/{campus}/{carrera}', 'CarreraController@carreraVI4');
Route::get('/carreraVI5/{campus}/{carrera}', 'CarreraController@carreraVI5');
Route::get('/carreraVII1/{campus}/{carrera}', 'CarreraController@carreraVII1');

//Para obtener las carreras por campus y nivel (LICENCIATURA - POSGRADO)
Route::get('/carrera/{campus}/{nivel}', 'CarreraController@ObtenerCarreras');


