<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Usuario;

class UsuariosSeeder extends Seeder {

	public function run()
	{		
		for ($i=0; $i < 1; $i++) 
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

		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=0; $i < 41; $i++) 
			{ 
				if($i == 0)
				{
				}
				elseif ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60010".$x."0".$i,
						'nombre' => "60010".$x."0".$i,
						'email' => "60010".$x."0".$i,
						'password' => bcrypt("60010".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60010".$x.$i,
						'nombre' => "60010".$x.$i,
						'email' => "60010".$x.$i,
						'password' => bcrypt("60010".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}


		for ($x=10; $x < 13; $x++) 
		{ 
			for ($i=0; $i < 41; $i++) 
			{ 
				if($i == 0)
				{

				}
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "6001".$x."0".$i,
						'nombre' => "6001".$x."0".$i,
						'email' => "6001".$x."0".$i,
						'password' => bcrypt("6001".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6001".$x.$i,
						'nombre' => "6001".$x.$i,
						'email' => "6001".$x.$i,
						'password' => bcrypt("6001".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}
		//crear todos los usuarios que se necesiten 
	}
}
