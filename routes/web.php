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
Route::view('/','welcome')->middleware('guest');
Route::view('/iniciar_sesion', 'Inicio')->name('iniciar_sesion')->middleware('guest');;
Route::view('/Dashboard','Dashboard')->middleware('auth');
Route::view('/Verified','Verificacion');
Route::view('/Not-found', 'Not-found');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::post('/Login', 'UserController@LoginUser');
Route::post('/Registro', 'UserController@AgregarUser')->name('Registro');
Route::post('/Salir', 'UserController@logoutUser');
Route::post('/verifieds', 'UserController@VerifiedCode');
Route::post('/Datos', 'UserController@Returnwelcome');

Route::get('/Mostrar','UserController@index');

Route::delete('/{usuarios}','UserController@EliminarUsuario')->name('eliminar');