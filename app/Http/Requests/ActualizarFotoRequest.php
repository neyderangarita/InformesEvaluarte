<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use GestorImagenes\Album;
use GestorImagenes\Foto;

class ActualizarFotoRequest extends Request {

	public function authorize()
	{
		$id = $this->get('id');
		$foto = Foto::find($id);

		$album = Album::find($foto->album_id);

		if($foto)
		{
			return true;
		}
		return false;
	}

	public function rules()
	{
		return [
			'id' => 'required|exists:fotos,id',
			'nombre' => 'required',
			'descripcion' => 'required',
			'imagen' => 'max:20000',
		];
	}

}
