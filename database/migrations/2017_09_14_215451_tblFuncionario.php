<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('tblFuncionario', function (Blueprint $table) {
            $table->string('documento');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('correo'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('tblFuncionario');
       
    }
}
