<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use GestorImagenes\Album;

class MostrarFotosRequest extends Request {

	public function authorize()
	{
		$user = Auth::user();
		$id = $this->get('id');
		$album = $user->albumes()->find($id);

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
