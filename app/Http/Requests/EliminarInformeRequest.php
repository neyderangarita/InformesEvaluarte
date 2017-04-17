<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;
use GestorImagenes\Informe;

class EliminarInformeRequest extends Request {

	public function authorize()
	{
		$id = $this->get('id');
		$informe = Informe::find($id);

		if($informe)
		{
			return true;
		}
		return false;
	}

	public function rules()
	{
		return [
			'id' => 'required|exists:informes,id',
		];
	}

}
