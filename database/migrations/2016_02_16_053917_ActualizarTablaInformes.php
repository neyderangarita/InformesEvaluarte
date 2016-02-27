<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ActualizarTablaInformes extends Migration {


	public function up()
	{
		Schema::create('informes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('codigo_simulacro', 50);
			$table->string('Materia1', 50);
			$table->string('proMat1', 50);
			$table->string('Materia2', 50);
			$table->string('proMat2', 50);
			$table->string('Materia3', 50);
			$table->string('proMat3', 50);
			$table->string('Materia4', 50);
			$table->string('proMat4', 50);
			$table->string('Materia5', 50);
			$table->string('proMat5', 50);
			$table->string('proTotal', 50);
			$table->string('cuantitativo', 50);
			$table->string('competencias_ciudadanas', 50);
			$table->string('Mat1Componentes1', 50);
			$table->string('Mat1Componentes2', 50);
			$table->string('Mat1Componentes3', 50);
			$table->string('Mat1Competencia1', 50);
			$table->string('Mat1Competencia2', 50);
			$table->string('Mat1Competencia3', 50);
			$table->string('Mat2Componentes1', 50);
			$table->string('Mat2Componentes2', 50);
			$table->string('Mat2Componentes3', 50);
			$table->string('Mat2Componentes4', 50);
			$table->string('Mat2Competencia1', 50);
			$table->string('Mat2Competencia2', 50);
			$table->string('Mat2Competencia3', 50);
			$table->string('Mat4Competencia1', 50);
			$table->string('Mat4Competencia2', 50);
			$table->string('Mat4Competencia3', 50);
			$table->string('Mat5Competencia1', 50);
			$table->string('Mat5Competencia2', 50);
			$table->string('Mat5Competencia3', 50);
			$table->string('NombreEstudiante', 50);
			$table->string('colegio', 50);
			$table->string('ciudad', 50);
			$table->string('FechaAplico', 50);
			$table->string('NivelIngles', 50);
			$table->string('simulacro', 50);
			$table->string('grado', 50);
			$table->integer('codigo');
			$table->foreign('codigo')->references('id')->on('usuarios');
			$table->integer('puesto');
			$table->nullableTimestamps();
		});

	}


	public function down()
	{
		Schema::drop('Informes');
	}

}
