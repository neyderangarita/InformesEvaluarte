<?php namespace GestorImagenes\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use GestorImagenes\Informe;
use Khill\Lavacharts\Lavacharts;

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
			$materias->addRow([$simu,  ($informes[$i]->proMat4 * 3) / 4, $informes[$i]->proMat1, $informes[$i]->proMat5, $informes[$i]->proMat2, $informes[$i]->proMat3 ]);
		}  

		$lava->ColumnChart('Simulacros', $materias, [
		    'title' => 'Simulacros Presentados',
		    'titleTextStyle' => [
			        'color'    => '#6f6ae1',
			        'fontSize' => 25,
		    ],
		    'width' => 1200,

		]);

		/*
		//Grafica en barras 
		$votes  = $lava->DataTable();
		$votes->addStringColumn('Food Poll');
		$votes->addNumberColumn('Total');

		for ($i=0; $i < sizeof($informes); $i++) { 
			$simu = 'Simulacro '. ($i+1) ; 
			$votes->addRow([$simu,  $informes[$i]->proTotal]);
		}  

		$lava->BarChart('Simulacros', $votes,
		[
    		'title' => 'Simulacros Presentados',
    		'forceIFrame'         => false,
    		'barGroupWidth'       =>  50, //As a percent, "33%"
    		'orientation'         => 'vertical',
    		'dataOpacity'         => 0.7, 
			'titleTextStyle' => 
					[
			        'color'    => '#6f6ae1',
			        'fontSize' => 25,
			    	],
			'hAxes' =>  [
			   	[
				    'title' =>  'Resultado',
				    'textStyle' => [
				    	'color'    => '#000000',  // color de los valores horizontales
				    ]
			  	],
			],
			'width' => 850,
     	]
		);
		*/
		return view('informes.mostrar', ['informes' => $informes, 'lava' => $lava]);
	}

	public function getGenerarInforme($id)
	{
		$informar = Informe::where('codigo_simulacro', $id)->first();
        $view =  \View::make('informes.generar-informe', compact( 'informar'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('simulacro_saber.pdf');
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
