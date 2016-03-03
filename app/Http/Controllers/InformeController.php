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
		$informar = Informe::where('codigo', $id)->where('codigo_simulacro', $idSimulacro)->first();
        //$pdf = \PDF::loadView('informes.generar-informe-barras', compact('informar'));
        //return $pdf->download('simulacro_saber_primaria.pdf');

		$lava = new Lavacharts; // See note below for Laravel	
		$materias = $lava->DataTable();
		$materias->addStringColumn('Simulacros');
		$materias->addNumberColumn('Matematicas');
		$materias->addNumberColumn('Lectura Crítica');
		$materias->setDateTimeFormat('Y');

		for ($i=0; $i < sizeof($informes); $i++) { 
			$simu = '.';
			// '. ($i+1) ; 
			$materias->addRow([
				$simu,
				$informes[$i]->proMat1,
				$informes[$i]->proMat4
				]);
		}

		$lava->ColumnChart('Simulacros', $materias, [
		    'titleTextStyle' => [
			        'color'    => '#6f6ae1',
			        'fontSize' => 50,
		    ],
		    'legend' => ['position' => 'none'],
		    'colors' => ['#d52e32', '#d89d3f'],
		    'datatable' => $materias,
		    'barGroupWidth'  =>  0,  ///int | 'string'
		    'width' => 520,
		    'height' => 330,
		    'isStacked' => false,
			'vAxis' => ['format' => 'decimal',
						'minValue' => 0,
						'maxValue' => 100,
						],
			'hAxis' => ['format' => 'decimal',
			],

		]);  


        return view('informes.generar-informe-barras', ['informar' => $informar, 'lava' => $lava]);

	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
