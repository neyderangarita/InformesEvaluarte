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


		if($informes[0]->grado == '10°' || $informes[0]->grado == '11°')
		{
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
		}
		elseif($informes[0]->grado == '3°' || $informes[0]->grado == '4°')
		{
			$materias->addNumberColumn('Lectura Crítica');
			$materias->addNumberColumn('Matematicas');
			$materias->setDateTimeFormat('Y');
		
			for ($i=0; $i < sizeof($informes); $i++) { 
				$simu = 'Simulacro '. ($i+1) ; 
				$materias->addRow([
					$simu, 
					round(($informes[$i]->proMat4 * 3) * (2/13)), 
					round(($informes[$i]->proMat1 * 3) * (2/13))  
				]);
			} 
		}
		elseif($informes[0]->grado == '5°' || $informes[0]->grado == '6°' || $informes[0]->grado == '7°' || $informes[0]->grado == '8°' || $informes[0]->grado == '9°')
		{
			$materias->addNumberColumn('Lectura Crítica');
			$materias->addNumberColumn('Matematicas');
			$materias->addNumberColumn('Competencias ciudadanas');
			$materias->addNumberColumn('Ciencias Naturales');
			$materias->addNumberColumn('Edu. Economica y financiera');
			$materias->setDateTimeFormat('Y');
		
			for ($i=0; $i < sizeof($informes); $i++) { 
				$simu = 'Simulacro '. ($i+1) ; 
				$materias->addRow([$simu, round(($informes[$i]->proMat4 * 3) * (5/13)), round(($informes[$i]->proMat1 * 3) * (5/13)),round(($informes[$i]->proMat5 * 3) * (5/13)), round(($informes[$i]->proMat2* 3) * (5/13)), round($informes[$i]->competencias_ciudadanas * (5/13))]);
			}
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

	public function getGenerarMediaVocacional($id, $idSimulacro)
	{
		$informar = Informe::where('codigo', $id)->where('codigo_simulacro', $idSimulacro)->first();
        $view =  \View::make('informes.generar-media-vocacional', compact( 'informar'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('simulacro_saber.pdf');
	}

	public function getGenerarBasicaPrimaria($id, $idSimulacro)
	{
		$usuario = Auth::user();
		$informes = $usuario->informes;
		$informar = Informe::where('codigo', $id)->where('codigo_simulacro', $idSimulacro)->first();
		$lava = new Lavacharts; // See note below for Laravel	
		$materias = $lava->DataTable();
		$materias->addStringColumn('Simulacros');
		$materias->addNumberColumn('Matematicas');
		$materias->addNumberColumn('Lectura Crítica');
		$materias->setDateTimeFormat('Y');

		for ($i=0; $i < sizeof($informes); $i++) { 
			$simu = '.';
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
        return view('informes.generar-basica-primaria', ['informar' => $informar, 'lava' => $lava]);
	}

	public function getGenerarBasicaSecundaria($id, $idSimulacro)
	{
		$usuario = Auth::user();
		$informes = $usuario->informes;
		$informar = Informe::where('codigo', $id)->where('codigo_simulacro', $idSimulacro)->first();
		$lava = new Lavacharts; // See note below for Laravel	
		$materias = $lava->DataTable();
		$materias->addStringColumn('Simulacros');
		$materias->addNumberColumn('Matematicas');
		$materias->addNumberColumn('Lenguaje');
		$materias->addNumberColumn('Ciencias Naturales');
		$materias->addNumberColumn('Competencias ciudadanas');
		$materias->addNumberColumn('Edu. Economica y financiera');
		$materias->setDateTimeFormat('Y');

		for ($i=0; $i < sizeof($informes); $i++) { 
			$simu = '.';
			$materias->addRow([
				$simu,
				$informes[$i]->proMat1,
				$informes[$i]->proMat4,
				$informes[$i]->proMat2,
				$informes[$i]->proMat5,
				$informes[$i]->competencias_ciudadanas,
				]);
		}

		$lava->ColumnChart('Simulacros', $materias, [
		    'titleTextStyle' => [
			        'color'    => '#6f6ae1',
			        'fontSize' => 50,
		    ],
		    'legend' => ['position' => 'none'],
		    'colors' => ['#f1121c', '#eca40d', '#73b92b', '#8010c4', '#7af4eb'],
		    'datatable' => $materias,
		    'barGroupWidth'  =>  5,  ///int | 'string'
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
        return view('informes.generar-basica-secundaria', ['informar' => $informar, 'lava' => $lava]);
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
