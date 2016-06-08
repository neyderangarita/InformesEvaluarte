<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;

class IniciarSesionRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'email' => 'required',
			//'email' => 'required|email',
			'g-recaptcha-response' => 'required|captcha'
			'password' => 'required'
		];
	}
}
