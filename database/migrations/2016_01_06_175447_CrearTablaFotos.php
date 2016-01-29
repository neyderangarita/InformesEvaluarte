<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaFotos extends Migration {

	public function up()
	{
		Schema::create('fotos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('descripcion');
			$table->string('ruta');
			$table->integer('album_id')->unsigned();
			$table->foreign('album_id')->references('id')->on('albumes');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('fotos');
	}

}
