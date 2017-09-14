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

Route::post('/empresa', 'EmpresaController@guardarEmpresa');
Route::get('/empresa', 'EmpresaController@listarEmpresa');
Route::put('/empresa/{nit}', 'EmpresaController@actualizarEmpresa');
Route::delete('/empresa/{nit}', 'EmpresaController@eliminarEmpresa');
