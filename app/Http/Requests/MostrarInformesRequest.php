<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use GestorImagenes\Informe;

class MostrarInformesRequest extends Request {

	public function authorize()
	{
		$user = Auth::user();
		$id = $this->get('id');
		$album = $user->informes()->find($id);

		if($album)
		{
			return true;
		}

		return false;		
	}

	public function rules()
	{
		return [
			'id' => 'required'
		];
	}
}
