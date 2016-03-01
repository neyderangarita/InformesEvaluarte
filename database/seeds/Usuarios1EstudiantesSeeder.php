<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Usuario;

class Usuarios1EstudiantesSeeder extends Seeder{

    public function run()
    {

		/////////////////////////// ESTUDIANTES SANTO DOMINGO SAVIO  ///////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60360".$x."0".$i,
						'nombre' => "60360".$x."0".$i,
						'email' => "60360".$x."0".$i,
						'password' => bcrypt("60360".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60360".$x.$i,
						'nombre' => "60360".$x.$i,
						'email' => "60360".$x.$i,
						'password' => bcrypt("60360".$x.$i),
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
						'id' => "6036".$x."0".$i,
						'nombre' => "6036".$x."0".$i,
						'email' => "6036".$x."0".$i,
						'password' => bcrypt("6036".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6036".$x.$i,
						'nombre' => "6036".$x.$i,
						'email' => "6036".$x.$i,
						'password' => bcrypt("6036".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}

		/////////////////////////// ESTUDIANTES NUESTRA SEÑORA DE LA SABIDURIA  ///////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60190".$x."0".$i,
						'nombre' => "60190".$x."0".$i,
						'email' => "60190".$x."0".$i,
						'password' => bcrypt("60190".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60190".$x.$i,
						'nombre' => "60190".$x.$i,
						'email' => "60190".$x.$i,
						'password' => bcrypt("60190".$x.$i),
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
						'id' => "6019".$x."0".$i,
						'nombre' => "6019".$x."0".$i,
						'email' => "6019".$x."0".$i,
						'password' => bcrypt("6019".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6019".$x.$i,
						'nombre' => "6019".$x.$i,
						'email' => "6019".$x.$i,
						'password' => bcrypt("6019".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}


		/////////////////////////// ESTUDIANTES NORMAL SUPERIOR  ///////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 43; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60170".$x."0".$i,
						'nombre' => "60170".$x."0".$i,
						'email' => "60170".$x."0".$i,
						'password' => bcrypt("60170".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60170".$x.$i,
						'nombre' => "60170".$x.$i,
						'email' => "60170".$x.$i,
						'password' => bcrypt("60170".$x.$i),
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
						'id' => "6017".$x."0".$i,
						'nombre' => "6017".$x."0".$i,
						'email' => "6017".$x."0".$i,
						'password' => bcrypt("6017".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6017".$x.$i,
						'nombre' => "6017".$x.$i,
						'email' => "6017".$x.$i,
						'password' => bcrypt("6017".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}


		/////////////////////////// ESTUDIANTES JOHN F. KENNEDY  ///////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60390".$x."0".$i,
						'nombre' => "60390".$x."0".$i,
						'email' => "60390".$x."0".$i,
						'password' => bcrypt("60390".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60390".$x.$i,
						'nombre' => "60390".$x.$i,
						'email' => "60390".$x.$i,
						'password' => bcrypt("60390".$x.$i),
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
						'id' => "6039".$x."0".$i,
						'nombre' => "6039".$x."0".$i,
						'email' => "6039".$x."0".$i,
						'password' => bcrypt("6039".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6039".$x.$i,
						'nombre' => "6039".$x.$i,
						'email' => "6039".$x.$i,
						'password' => bcrypt("6039".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}


				/////////////////////////// ESTUDIANTES GIMNASIO LOS OCOBOS  ///////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60180".$x."0".$i,
						'nombre' => "60180".$x."0".$i,
						'email' => "60180".$x."0".$i,
						'password' => bcrypt("60180".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60180".$x.$i,
						'nombre' => "60180".$x.$i,
						'email' => "60180".$x.$i,
						'password' => bcrypt("60180".$x.$i),
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
						'id' => "6018".$x."0".$i,
						'nombre' => "6018".$x."0".$i,
						'email' => "6018".$x."0".$i,
						'password' => bcrypt("6018".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6018".$x.$i,
						'nombre' => "6018".$x.$i,
						'email' => "6018".$x.$i,
						'password' => bcrypt("6018".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}

/////////////////////////// ESTUDIANTES FUERZA AÉREA LUIS F. GÓMEZ NIÑO  ///////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60120".$x."0".$i,
						'nombre' => "60120".$x."0".$i,
						'email' => "60120".$x."0".$i,
						'password' => bcrypt("60120".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60120".$x.$i,
						'nombre' => "60120".$x.$i,
						'email' => "60120".$x.$i,
						'password' => bcrypt("60120".$x.$i),
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
						'id' => "6012".$x."0".$i,
						'nombre' => "6012".$x."0".$i,
						'email' => "6012".$x."0".$i,
						'password' => bcrypt("6012".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6012".$x.$i,
						'nombre' => "6012".$x.$i,
						'email' => "6012".$x.$i,
						'password' => bcrypt("6012".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}


/////////////////////////// ESTUDIANTES CENTRO SOCIAL LA PRESENTACIÓN  ///////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 41; $i++) 
			{ 
				if ($i > 0 && $i < 10)
				{
					Usuario::create(
					[
						'id' => "60160".$x."0".$i,
						'nombre' => "60160".$x."0".$i,
						'email' => "60160".$x."0".$i,
						'password' => bcrypt("60160".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[
						'id' => "60160".$x.$i,
						'nombre' => "60160".$x.$i,
						'email' => "60160".$x.$i,
						'password' => bcrypt("60160".$x.$i),
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
						'id' => "6016".$x."0".$i,
						'nombre' => "6016".$x."0".$i,
						'email' => "6016".$x."0".$i,
						'password' => bcrypt("6016".$x."0".$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
				elseif ($i > 9)
				{
					Usuario::create(
					[		
						'id' => "6016".$x.$i,
						'nombre' => "6016".$x.$i,
						'email' => "6016".$x.$i,
						'password' => bcrypt("6016".$x.$i),
						'pregunta' => "preg$i", 
						'respuesta' => "resp$i",
						'tipo' => "estudiante"
					]);
				}
			}
		}


    }
}
