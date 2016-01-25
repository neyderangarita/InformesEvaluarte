<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInformes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('informes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo_simulacro');
			$table->string('proTotal');
			$table->string('Materia1');
			$table->string('proMat1');
			$table->integer('codigo');
			$table->foreign('codigo')->references('id')->on('usuarios');
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
		Schema::drop('informes');
	}

}