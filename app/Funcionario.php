<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
   protected $fillable =['documento','nombre','apellido','telefono','correo'];
   	protected $table ='tblFuncionario';
   	protected $primaryKey = 'documento';

  	public static function guardar($datos){
		$funcionario = new Funcionario($datos);
		$funcionario->save();

	}

	public static function listarFuncionario(){
		$funcionarios= Funcionario::all();
		return $funcionarios;
	}
	public static function actualizarFuncionario($documento,$datos){
		$funcionario= Funcionario::find($documento);
		$funcionario->fill($datos);
		$funcionario->save();
	}
	public static function eliminarFuncionario($documento){
		$funcionario= Funcionario::find($documento);
		$funcionario->delete();
	}
}
