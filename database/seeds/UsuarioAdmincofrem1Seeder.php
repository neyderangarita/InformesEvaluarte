<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Usuario;

class UsuarioAdmincofrem1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //crear colegios
		for ($i=2; $i < 3; $i++) 
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
