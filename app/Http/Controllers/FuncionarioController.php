<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionarioController extends Controller
{
      public function guardarFuncionario(Request $request)
   {
		$request->validate([
		"documento"=>"required | numeric | unique:tblFuncionario,documento",
		"correo"=>"email"]);

		Funcionario::guardar($request->all());
		return 'ok';  
   }

   public function listarFuncionario(){
   	$lista = Funcionario::listarFuncionario();
   	return $lista;
   }

   public function actualizarFuncionario(Request $request,$documento){
	$request->validate([
		"documento"=>"required | numeric | exists:tblFuncionario,documento",
		"correo"=>"email"]);

		Funcionario::actualizarFuncionario($documento,$request->all());
		return 'ok';

   }

   public function eliminarFuncionario($documento){
   		Funcionario::eliminarFuncionario($documento);
   		return 'ok';
   }
}
