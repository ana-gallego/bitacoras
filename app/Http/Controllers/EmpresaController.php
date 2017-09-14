<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
{
  
   public function guardarEmpresa(Request $request)
   {
		$request->validate([
		"nit"=>"required | numeric | unique:tblEmpresa,nit",
		"correo"=>"email"]);

		Empresa::guardar($request->all());
		return 'ok';  
   }

   public function listarEmpresa(){
   	$lista = Empresa::listarEmpresa();
   	return $lista;
   }

   public function actualizarEmpresa(Request $request,$nit){
	$request->validate([
		"nit"=>"required | numeric | exists:tblEmpresa,nit",
		"correo"=>"email"]);

		Empresa::actualizarEmpresa($nit,$request->all());
		return 'ok';

   }

   public function eliminarEmpresa($nit){
   		Empresa::eliminarEmpresa($nit);
   		return 'ok';
   }

}
