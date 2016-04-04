<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Usuario;

class UsuarioAdmincofremSeeder extends Seeder
{
    public function run()
    {
        //
        //crear colegios
		for ($i=1; $i < 2; $i++) 
		{ 
			Usuario::create(
			[
				'id' => "6000$i",
				'nombre' => "ADMINISTRATIVO COLEGIO",
				'email' => "ADMINISTRATIVO6000$i",
				'password' => bcrypt("ADMINISTRATIVO6000$i"),
				'pregunta' => "preg$i", 
				'respuesta' => "resp$i",
				'tipo' => "colegio"
			]);
		}
    }
}
