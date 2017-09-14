<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{	
	protected $fillable =['nit','nombre','direccion','telefono','correo'];
   	protected $table ='tblEmpresa';
   	protected $primaryKey = 'nit';

  	public static function guardar($datos){
		$empresa = new Empresa($datos);
		$empresa->save();

	}

	public static function listarEmpresa(){
		$empresas= Empresa::all();
		return $empresas;
	}
	public static function actualizarEmpresa($nit,$datos){
		$empresa= Empresa::find($nit);
		$empresa->fill($datos);
		$empresa->save();
	}
	public static function eliminarEmpresa($nit){
		$empresa= Empresa::find($nit);
		$empresa->delete();
	}
}