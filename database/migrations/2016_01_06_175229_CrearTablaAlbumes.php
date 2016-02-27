<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAlbumes extends Migration {

	public function up()
	{
		Schema::create('albumes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('descripcion');
			$table->string('ruta');
			$table->integer('usuario_id');
			$table->foreign('usuario_id')->references('id')->on('usuarios');
			$table->nullableTimestamps();
		});
	}	

	public function down()
	{
		Schema::drop('albumes');
	}

}
