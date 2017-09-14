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
	// -- -- -- EMPRESA -- -- --//
Route::post('/empresa', 'EmpresaController@guardarEmpresa');
Route::get('/empresa', 'EmpresaController@listarEmpresa');
Route::put('/empresa/{nit}', 'EmpresaController@actualizarEmpresa');
Route::delete('/empresa/{nit}', 'EmpresaController@eliminarEmpresa');

	// -- -- -- FUNCIONARIO -- -- --//
Route::post('/funcionario', 'FuncionarioController@guardarFuncionario');
Route::get('/funcionario', 'FuncionarioController@listarFuncionario');
Route::put('/funcionario/{documento}', 'FuncionarioController@actualizarFuncionario');
Route::delete('/funcionario/{documento}', 'FuncionarioController@eliminarFuncionario');