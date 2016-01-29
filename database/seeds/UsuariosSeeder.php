<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Usuario;

class UsuariosSeeder extends Seeder {

	public function run()
	{
		for ($i=0; $i < 11; $i++) 
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
	}
}
