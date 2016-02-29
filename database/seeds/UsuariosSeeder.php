<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Usuario;

class UsuariosSeeder extends Seeder {

	public function run()
	{	
		//crear administrador
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
		//crear colegios
		for ($i=1; $i < 6; $i++) 
		{ 
			Usuario::create(
			[
				'id' => "600$i",
				'nombre' => "COLEGIO",
				'email' => "C600$i",
				'password' => bcrypt("C600$i"),
				'pregunta' => "preg$i", 
				'respuesta' => "resp$i",
				'tipo' => "colegio"
			]);
		}

		//crear estudiantes COFREM 
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
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
		//HASTA 60010940 
		/////////////////////////////////////////////////////////////////////////////
		for ($x=10; $x < 13; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
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

		///////// ESTUDIANTES DON BOSCO  /////////////////////////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60140".$x."0".$i,
						'nombre' => "60140".$x."0".$i,
						'email' => "60140".$x."0".$i,
						'password' => bcrypt("60140".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60140".$x.$i,
						'nombre' => "60140".$x.$i,
						'email' => "60140".$x.$i,
						'password' => bcrypt("60140".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}

		//HASTA 60140940 
		/////////////////////////////////////////////////////////////////////////////
		for ($x=10; $x < 13; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "6014".$x."0".$i,
						'nombre' => "6014".$x."0".$i,
						'email' => "6014".$x."0".$i,
						'password' => bcrypt("6014".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6014".$x.$i,
						'nombre' => "6014".$x.$i,
						'email' => "6014".$x.$i,
						'password' => bcrypt("6014".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}


		/////////////////////////// ESTUDIANTES LA SALLE  ////////////////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60070".$x."0".$i,
						'nombre' => "60070".$x."0".$i,
						'email' => "60070".$x."0".$i,
						'password' => bcrypt("60070".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60070".$x.$i,
						'nombre' => "60070".$x.$i,
						'email' => "60070".$x.$i,
						'password' => bcrypt("60070".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}

		//HASTA 60070940 
		/////////////////////////////////////////////////////////////////////////////
		for ($x=10; $x < 13; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "6007".$x."0".$i,
						'nombre' => "6007".$x."0".$i,
						'email' => "6007".$x."0".$i,
						'password' => bcrypt("6007".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6007".$x.$i,
						'nombre' => "6007".$x.$i,
						'email' => "6007".$x.$i,
						'password' => bcrypt("6007".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}


		/////////////////////////// ESTUDIANTES NEIL ARMSTRON SCHOOL  ///////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60060".$x."0".$i,
						'nombre' => "60060".$x."0".$i,
						'email' => "60060".$x."0".$i,
						'password' => bcrypt("60060".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60060".$x.$i,
						'nombre' => "60060".$x.$i,
						'email' => "60060".$x.$i,
						'password' => bcrypt("60060".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}

		//HASTA 60060940 
		/////////////////////////////////////////////////////////////////////////////
		for ($x=10; $x < 13; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "6006".$x."0".$i,
						'nombre' => "6006".$x."0".$i,
						'email' => "6006".$x."0".$i,
						'password' => bcrypt("6006".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6006".$x.$i,
						'nombre' => "6006".$x.$i,
						'email' => "6006".$x.$i,
						'password' => bcrypt("6006".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}

		/////////////////////////// ESTUDIANTES NUEVO GIMNASIO  ///////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60080".$x."0".$i,
						'nombre' => "60080".$x."0".$i,
						'email' => "60080".$x."0".$i,
						'password' => bcrypt("60080".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60080".$x.$i,
						'nombre' => "60080".$x.$i,
						'email' => "60080".$x.$i,
						'password' => bcrypt("60080".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}

		//HASTA 60080940 
		/////////////////////////////////////////////////////////////////////////////
		for ($x=10; $x < 13; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "6008".$x."0".$i,
						'nombre' => "6008".$x."0".$i,
						'email' => "6008".$x."0".$i,
						'password' => bcrypt("6008".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6008".$x.$i,
						'nombre' => "6008".$x.$i,
						'email' => "6008".$x.$i,
						'password' => bcrypt("6008".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}

	}
}
