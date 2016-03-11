<?php namespace GestorImagenes\Http\Requests;
use GestorImagenes\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CargarSimulacrosRequest extends Request {

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return
		[
			'imagen' => 'required|max:20000'
		];
	}
}