<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;

class EditarPerfilRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'nombre' => 'required',
			'password' => 'min:6|confirmed',
			'pregunta' => '',
			'respuesta' => 'required_with:pregunta'
		];
	}

}
