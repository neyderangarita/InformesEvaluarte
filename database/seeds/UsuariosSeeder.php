<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Usuario;

class UsuariosSeeder extends Seeder {

	public function run()
	{
		for ($i=0; $i < 20; $i++) 
		{ 
			if($i == 0)
			{
				Usuario::create(
				[
					'id' => "6001010".$i,
					'nombre' => "ADMINISTRADOR",
					'email' => "ADMINISTRADOR",
					'password' => bcrypt("ADMINISTRADOR$i"),
					'pregunta' => "ADMINISTRADOR$i", 
					'respuesta' => "ADMINISTRADOR$i",
					'tipo' => "evaluarte"
				]);
			}
			elseif ($i > 0 && $i < 10)
			{
				Usuario::create(
				[
					'id' => "6001010".$i,
					'nombre' => "6001010$i",
					'email' => "6001010$i",
					'password' => bcrypt("6001010$i"),
					'pregunta' => "preg$i", 
					'respuesta' => "resp$i",
					'tipo' => "estudiante"
				]);
			}
			else
			{
				Usuario::create(
				[
					'id' => "600101".$i,
					'nombre' => "600101$i",
					'email' => "600101$i",
					'password' => bcrypt("600101$i"),
					'pregunta' => "preg$i", 
					'respuesta' => "resp$i",
					'tipo' => "estudiante"
				]);
			}
		}
		//crear todos los usuarios que se necesiten 
	}
}
