<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('id')->unique();
			$table->string('nombre');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('tipo');
			$table->string('pregunta');
			$table->string('respuesta');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('usuarios');
	}

}
