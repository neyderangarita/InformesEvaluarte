<?php namespace GestorImagenes\Services;

use GestorImagenes\Usuario;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	public function validator(array $data)
	{
		return Validator::make($data, [
			'nombre' => 'required|max:255',
			'email' => 'required|max:255|unique:usuarios',
			'password' => 'required|confirmed|min:6',
			'pregunta' => 'required|max:255',
			'respuesta' => 'required|max:255',
		]);
	}

	public function create(array $data)
	{
		return Usuario::create([
			'nombre' => $data['nombre'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'pregunta' => $data['pregunta'],
			'respuesta' => $data['respuesta']
		]);
	}

}
