<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/canchas','canchaController@getAll')->name('getAllCanchas');
Route::post('/canchas','canchaController@insert')->name('insertCancha');
Route::get('/canchas/{id}','canchaController@get')->name('getCancha');
Route::put('/canchas/{id}','canchaController@put')->name('putCancha');
Route::delete('/canchas/{id}','canchaController@delete')->name('deleteCancha');
///////////////////////////////////////////////////////////
Route::get('/alquilers','alquilerController@getAll');
Route::post('/alquilers','alquilerController@insert');
Route::get('/alquilers/{cancha}/{turno}','alquilerController@get');
Route::put('/alquilers/{cancha}/{turno}','alquilerController@put');
Route::delete('/alquilers/{cancha}/{turno}','alquilerController@delete');
////////////////////////////////////////////////////////////////////////////////
Route::get('/usuarios','usuariosController@getAll')->name('getAllUsuarios');
Route::post('/usuarios','usuariosController@insert')->name('insertUsuario');
Route::get('/usuarios/{id}','usuariosController@get')->name('getUsuario');
Route::put('/usuarios/{id}','usuariosController@put')->name('putUsuario');
Route::delete('/usuarios/{id}','usuariosController@delete')->name('deleteUsuario');