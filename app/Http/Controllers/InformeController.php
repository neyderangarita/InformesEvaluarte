<?php namespace GestorImagenes\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use GestorImagenes\Informe;
use Khill\Lavacharts\Lavacharts;
use GestorImagenes\Http\Controllers\PDF;

class InformeController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		$usuario = Auth::user();
		$informes = $usuario->informes;
		$lava = new Lavacharts; // See note below for Laravel	
		$materias = $lava->DataTable();
		$materias->addStringColumn('Simulacros');
		$materias->addNumberColumn('Lectura Crítica');
		$materias->addNumberColumn('Matematicas');
		$materias->addNumberColumn('Sociales y Ciudadanas');
		$materias->addNumberColumn('Ciencias Naturales');
		$materias->addNumberColumn('Ingles');
		$materias->setDateTimeFormat('Y');
		for ($i=0; $i < sizeof($informes); $i++) { 
			$simu = 'Simulacro '. ($i+1) ; 
			$materias->addRow([$simu, round(($informes[$i]->proMat4 * 3) * (5/13)), round(($informes[$i]->proMat1 * 3) * (5/13)),round(($informes[$i]->proMat5 * 3) * (5/13)), round(($informes[$i]->proMat2* 3) * (5/13)), round($informes[$i]->proMat3 * (5/13))]);
		}
		$lava->ColumnChart('Simulacros', $materias, [
		    'title' => 'PUNTAJE GLOBAL',
		    'titleTextStyle' => [
			        'color'    => '#6f6ae1',
			        'fontSize' => 25,
		    ],
		    'width' => 650,
		    'height' => 500,
		    'isStacked'           => true,

		]);  

		return view('informes.mostrar', ['informes' => $informes, 'lava' => $lava]);
	}

	public function getGenerarInforme($id, $idSimulacro)
	{
		$informar = Informe::where('codigo', $id)->where('codigo_simulacro', $idSimulacro)->first();
        $view =  \View::make('informes.generar-informe', compact( 'informar'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('simulacro_saber.pdf');
	}

	public function getGenerarInformeBarras($id, $idSimulacro)
	{

		$usuario = Auth::user();
		$informes = $usuario->informes;
		$lava = new Lavacharts; // See note below for Laravel
		$materias = $lava->DataTable();
		$materias->addStringColumn('Simulacros');
		$materias->addNumberColumn('Lectura Crítica');
		$materias->addNumberColumn('Matematicas');
		$materias->addNumberColumn('Sociales y Ciudadanas');
		$materias->addNumberColumn('Ciencias Naturales');
		$materias->addNumberColumn('Ingles');
		$materias->setDateTimeFormat('Y');

		for ($i=0; $i < sizeof($informes); $i++) { 
			$simu = 'Simulacro '. ($i+1) ; 
			$materias->addRow([$simu, round(($informes[$i]->proMat4 * 3) * (5/13)), round(($informes[$i]->proMat1 * 3) * (5/13)),round(($informes[$i]->proMat5 * 3) * (5/13)), round(($informes[$i]->proMat2* 3) * (5/13)), round($informes[$i]->proMat3 * (5/13))]);
		}
		/*
		$yourFirstChart["chart"] = array("type" => "bar", "renderTo" => "container");
	    $yourFirstChart["title"] = array("text" => "Fruit Consumption");
	    $yourFirstChart["xAxis"] = array("categories" => ['Apples', 'Bananas', 'Oranges']);
	    $yourFirstChart["yAxis"] = array("title" => array("text" => "Fruit eaten"));

	    $yourFirstChart["series"] = [
	        array("name" => "Jane", "data" => [1,0,4]),
	        array("name" => "John", "data" => [5,7,3])
	    ];

	    , 'yourFirstChart'
		*/


		$informar = Informe::where('codigo', $id)->where('codigo_simulacro', $idSimulacro)->first();
        $pdf = \PDF::loadView('informes.generar-informe-barras', compact('informar'));
        return $pdf->download('simulacro_saber_primaria.pdf');
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
