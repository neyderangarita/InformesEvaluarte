<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;

class CrearAlbumRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'nombre' => 'required',
			'descripcion' => 'required'
		];
	}
}
