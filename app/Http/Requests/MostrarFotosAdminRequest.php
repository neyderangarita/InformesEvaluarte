<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use GestorImagenes\Album;

class MostrarFotosAdminRequest extends Request {

	public function authorize()
	{
		$id = $this->get('id');
		$album = Album::find($id);
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
