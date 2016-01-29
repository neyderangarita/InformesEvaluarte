<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use GestorImagenes\Album;

class MostrarSimulacrosRequest extends Request {

	public function authorize()
	{
		$user = Auth::user();
		$id = $this->get('email');
		$simulacro = $user->simulacros()->find($id);

		if($simulacro)
		{
			return true;
		}
		return false;		
	}

	public function rules()
	{
		return [
			'email' => 'required'
		];
	}
}
