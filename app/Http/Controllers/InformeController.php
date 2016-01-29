<?php namespace GestorImagenes\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use GestorImagenes\Informe;


class InformeController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		$usuario = Auth::user();
		$informes = $usuario->informes;
		return view('informes.mostrar', ['informes' => $informes]);
	}

	public function getGenerarInforme($id)
	{
		$informar = Informe::where('codigo_simulacro', $id)->first();
        $view =  \View::make('informes.generar-informe', compact( 'informar'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('simulacro_saber.pdf');
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
