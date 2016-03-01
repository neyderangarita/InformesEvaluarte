<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use GestorImagenes\Album;
use GestorImagenes\Foto;
use GestorImagenes\Usuario;
class UsuariosNormalSeeder extends Seeder
{

    public function run()
    {

		/////////////////////////// ESTUDIANTES NORMAL SUPERIOR  ///////////////////////////////////////
		for ($x=1; $x < 10; $x++) 
		{ 
			for ($i=1; $i < 45; $i++) 
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
			for ($i=1; $i < 45; $i++) 
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

    }
}
