<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;

class RecuperarContrasenaRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'email' => 'required|exists:usuarios,email',
			'password' => 'required|min:6|confirmed',
			'pregunta' => 'required',
			'respuesta' => 'required'
		];
	}
}
