<?php namespace GestorImagenes\Http\Requests;
use GestorImagenes\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class CrearFotoRequest extends Request {

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
		return
		[
			'id' => 'required|exists:albumes,id',
			'nombre' => 'required',
			'descripcion' => 'required',
			'imagen' => 'required|image|max:20000'
			//
		];
	}
}