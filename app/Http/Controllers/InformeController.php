<?php namespace GestorImagenes\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use GestorImagenes\Informe;
use Khill\Lavacharts\Lavacharts;
use GestorImagenes\Http\Controllers\PDF;
use GestorImagenes\Http\Requests\CargarSimulacrosRequest;
use Carbon\Carbon;

use Input;
use Maatwebsite\Excel\Facades\Excel;

class InformeController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
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
		$informar = Informe::where('codigo', $id)->where('codigo_simulacro', $idSimulacro)->first();
		$lava = new Lavacharts; // See note below for Laravel	
		$materias = $lava->DataTable();
		$materias->addStringColumn('Simulacros');
		$materias->addNumberColumn('Matematicas');
		$materias->addNumberColumn('Lectura Crítica');
		$materias->setDateTimeFormat('Y');

		for ($i=0; $i < sizeof($informar); $i++) { 
			$simu = '.';
			$materias->addRow([
				$simu,
				$informar->proMat1,
				$informar->proMat4
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
		    'barGroupWidth'  =>  0, 
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

		for ($i=0; $i < sizeof($informar); $i++) { 
			$simu = '.';
			$materias->addRow([
				$simu,
				$informar->proMat1,
				$informar->proMat4,
				$informar->proMat2,
				$informar->proMat5,
				$informar->competencias_ciudadanas,
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

    public function getCargarSimulacros()
    {
    	return view('informes.cargar-simulacros');
    }

    public function getConsultarSimulacro($simulacro)
    {
    	$usuario = Auth::user();
    	$informes = Informe::where('codigo', '=', $usuario->id)->where('simulacro', $simulacro)->take(20)->get();
    	
    	if(sizeof($informes) > 0)
    	{
	    	$lava = new Lavacharts; // See note below for Laravel	
			$materias = $lava->DataTable();
			$materias->addStringColumn('Simulacros');

			if($simulacro == 'Tu saber')
			{
				if($informes[0]->grado == 'JARDÍN' || $informes[0]->grado == 'PREJARDÍN' || $informes[0]->grado == 'TRANSICIÓN' )
				{
					$materias->addNumberColumn('Cognitiva');
					$materias->addNumberColumn('Comunicativa');
					$materias->addNumberColumn('Socio-Afectiva');
					$materias->setDateTimeFormat('Y');
				
					for ($i=0; $i < sizeof($informes); $i++) { 
						$simu = 'Simulacro '. ($i+1) ; 
						$materias->addRow([$simu, round($informes[$i]->proMat1), round($informes[$i]->proMat2), round($informes[$i]->proMat3)]);
					}			
				}
				elseif($informes[0]->grado == '10°' || $informes[0]->grado == '11°')
				{
					$materias->addNumberColumn('Matematicas');
					$materias->addNumberColumn('Lectura Crítica');
					$materias->addNumberColumn('Sociales y Ciudadanas');
					$materias->addNumberColumn('Ciencias Naturales');
					$materias->addNumberColumn('Ingles');
					$materias->setDateTimeFormat('Y');
				
					for ($i=0; $i < sizeof($informes); $i++) { 
						$simu = 'Simulacro '. ($i+1) ; 
						$materias->addRow([$simu, round($informes[$i]->proMat1), round($informes[$i]->proMat2), round($informes[$i]->proMat3), round($informes[$i]->proMat4), round($informes[$i]->proMat5)]);
					}
				}
				else
				{
					$materias->addNumberColumn('Matematicas');
					$materias->addNumberColumn('Lenguaje');
					$materias->addNumberColumn('Sociales y Ciudadanas');
					$materias->addNumberColumn('Ciencias Naturales');
					$materias->addNumberColumn('Ingles');
					$materias->setDateTimeFormat('Y');
				
					for ($i=0; $i < sizeof($informes); $i++) 
					{ 
						$simu = 'Simulacro '. ($i+1) ; 
						$materias->addRow([$simu, round($informes[$i]->proMat1), round($informes[$i]->proMat2), round($informes[$i]->proMat3), round($informes[$i]->proMat4), round($informes[$i]->proMat5)]);
					}
				}
			}
			else
			{	
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
				elseif($informes[0]->grado == '3°')
				{
					$materias->addNumberColumn('Lectura Crítica');
					$materias->addNumberColumn('Matematicas');
					$materias->setDateTimeFormat('Y');
				
					for ($i=0; $i < sizeof($informes); $i++) { 
						$simu = 'Simulacro '. ($i+1) ; 
						$materias->addRow([
							$simu, 
							$informes[$i]->proMat3, 
							$informes[$i]->proMat1  
						]);
					} 
				}
				elseif($informes[0]->grado == '4°')	
				{
					$materias->addNumberColumn('Lectura Crítica');
					$materias->addNumberColumn('Matematicas');
					$materias->setDateTimeFormat('Y');
				
					for ($i=0; $i < sizeof($informes); $i++) { 
						$simu = 'Simulacro '. ($i+1) ; 
						$materias->addRow([
							$simu, 
							$informes[$i]->proMat1, 
							$informes[$i]->proMat2  
						]);
					} 
				}
				elseif($informes[0]->grado == '5°')
				{
					$materias->addNumberColumn('Lectura Crítica');
					$materias->addNumberColumn('Matematicas');
					$materias->addNumberColumn('Competencias ciudadanas');
					$materias->addNumberColumn('Ciencias Naturales');
					$materias->setDateTimeFormat('Y');
				
					for ($i=0; $i < sizeof($informes); $i++) { 
						$simu = 'Simulacro '. ($i+1) ; 
						$materias->addRow([$simu, 
							$informes[$i]->proMat2, 
							$informes[$i]->proMat1,
							$informes[$i]->proMat4,
							$informes[$i]->proMat3]);
					}
				}
				elseif($informes[0]->grado == '6°' || $informes[0]->grado == '7°' || $informes[0]->grado == '8°')
				{
					$materias->addNumberColumn('Lectura Crítica');
					$materias->addNumberColumn('Matematicas');
					$materias->addNumberColumn('Competencias ciudadanas');
					$materias->addNumberColumn('Ciencias Naturales');
					$materias->addNumberColumn('Edu. Economica y financiera');
					$materias->setDateTimeFormat('Y');
				
					for ($i=0; $i < sizeof($informes); $i++) { 
						$simu = 'Simulacro '. ($i+1) ; 
						$materias->addRow([$simu, 
							$informes[$i]->proMat1, 
							$informes[$i]->proMat2,
							$informes[$i]->proMat4,
							$informes[$i]->proMat3,
							$informes[$i]->proMat5]);
					}
				}
				elseif($informes[0]->grado == '9°')
				{
					$materias->addNumberColumn('Lectura Crítica');
					$materias->addNumberColumn('Matematicas');
					$materias->addNumberColumn('Competencias ciudadanas');
					$materias->addNumberColumn('Ciencias Naturales');
					$materias->addNumberColumn('Edu. Economica y financiera');
					$materias->setDateTimeFormat('Y');
				
					for ($i=0; $i < sizeof($informes); $i++) { 
						$simu = 'Simulacro '. ($i+1) ; 
						$materias->addRow([$simu, 
							$informes[$i]->proMat2, 
							$informes[$i]->proMat1,
							$informes[$i]->proMat4,
							$informes[$i]->proMat3,
							$informes[$i]->proMat5]);
					}
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
		
			return view('informes.consultar-simulacro', ['informes' => $informes, 'lava' => $lava]); 
		}
		else{
			return redirect("/validado")->with('creada', 'No se han presentado simulacros');
		}	 
    }

    public function getConsultarSimulacrosaberDecimoonce($simulacro)
    {

    	$usuario = Auth::user();
		$informes = Informe::where('codigo', '=', $usuario->id)->where('simulacro', $simulacro)->take(20)->get();
    	$lava = new Lavacharts; // See note below for Laravel	
		$materias = $lava->DataTable();	
		$materias->addStringColumn('Simulacros');

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

    public function postCargarSimulacros(CargarSimulacrosRequest $request)
    {
		$imagen = $request->file('imagen');
		$ruta = '/img/';
		$nombre = 'Informes_Resultados_Pagina'.'.'.$imagen->guessExtension();
		$imagen->move(getcwd().$ruta, $nombre);

		$result = Excel::load('public/img/Informes_Resultados_Pagina.xlsx')->get();	

    	foreach ($result as $informe) 
    	{		
     			Informe::create([
     				'codigo_simulacro' => $informe->simulacros,
     				'Materia1' =>$informe->materia1,
     				'proMat1' =>$informe->pmat1,
     				'Materia2' =>$informe->materia2,
     				'proMat2' =>$informe->pmat2,
     				'Materia3' =>$informe->materia3,
     				'proMat3' =>$informe->pmat3,
     				'Materia4' =>$informe->materia4,
     				'proMat4' =>$informe->pmat4,
     				'Materia5' =>$informe->materia5,
     				'proMat5' =>$informe->pmat5,
     				'proTotal' =>$informe->ptotal,
     				'cuantitativo' =>$informe->cuanti,
     				'competencias_ciudadanas' =>$informe->comp_ciuda,
     				'Mat1Componentes1' =>$informe->m1componentes1,
     				'Mat1Componentes2' =>$informe->m1componentes2,
     				'Mat1Componentes3' =>$informe->m1componentes3,
     				'Mat1Competencia1' =>$informe->m1competencia1,
     				'Mat1Competencia2' =>$informe->m1competencia2,
     				'Mat1Competencia3' =>$informe->m1competencia3,
     				'Mat2Componentes1' =>$informe->m2componentes1,
     				'Mat2Componentes2' =>$informe->m2componentes2,
     				'Mat2Componentes3' =>$informe->m2componentes3,
     				'Mat2Componentes4' =>$informe->m2componentes4,
     				'Mat2Competencia1' =>$informe->m2competencia1,
     				'Mat2Competencia2' =>$informe->m2competencia2,
     				'Mat2Competencia3' =>$informe->m2competencia3,
     				'Mat4Competencia1' =>$informe->m4competencia1,
     				'Mat4Competencia2' =>$informe->m4competencia2,
     				'Mat4Competencia3' =>$informe->m4competencia3,
     				'Mat5Competencia1' =>$informe->m5competencia1,
     				'Mat5Competencia2' =>$informe->m5competencia2,
     				'Mat5Competencia3' =>$informe->m5competencia3,
     				'NombreEstudiante' =>$informe->nombreestudiante,
     				'colegio' =>$informe->colegio,
     				'ciudad' =>$informe->ciudad,
     				'FechaAplico' =>$informe->fechaaplico,
     				'NivelIngles' =>$informe->nivelingles,
     				'simulacro' =>$informe->simulacro,
     				'grado' =>$informe->grado,
     				'codigo' =>$informe->codigo_estudiante,
     				'puesto' =>$informe->puesto,
     			]);
    	}

		return redirect("/")->with('creada', 'Archivo subido');
    }

    public function getGenerarSaberSuperior($id)
	{
		$usuario = Auth::user();
    	$informar = Informe::where('id', $id)->where('simulacro', 'Tu saber')->first();
		$lava = new Lavacharts; // See note below for Laravel	
		$materias = $lava->DataTable();
		$materias->addStringColumn('Simulacros');
		$materias->addNumberColumn('Matemáticas');
		$materias->addNumberColumn('Lectura Crítica');
		$materias->addNumberColumn('Sociales y Ciudadanas');
		$materias->addNumberColumn('Ciencias Naturales');
		$materias->addNumberColumn('Inglés');
		$materias->setDateTimeFormat('Y');

		for ($i=0; $i < sizeof($informar); $i++) { 
			$simu = '.';
			$materias->addRow([
				$simu,
				$informar->proMat1,
				$informar->proMat2,
				$informar->proMat3,
				$informar->proMat4,
				$informar->proMat5,
				]);
		}

		$lava->ColumnChart('Simulacros', $materias, [
		    'titleTextStyle' => [
			        'color'    => '#6f6ae1',
			        'fontSize' => 50,
		    ],
		    'legend' => ['position' => 'none'],
		    'colors' => ['#E11D23', '#DAA10E', '#972C8E', '#A8A913', '#49ABAA'],
		    'datatable' => $materias,
		    'barGroupWidth'  =>  1,  ///int | 'string'
		    'width' => 490,
		    'height' => 330,
		    'isStacked' => false,
			'vAxis' => ['format' => 'decimal',
						'minValue' => 0,
						'maxValue' => 100,
						'gridlines' => [ 'count' => 6],
						],
			'hAxis' => ['format' => 'decimal',
			],
		]);  
        return view('informes.generar-saber-superior', ['informar' => $informar, 'lava' => $lava]);
	}

    public function getGenerarSaberMedia($id)
	{
		$usuario = Auth::user();
		//$informes = $usuario->informes;
		$informar = Informe::where('id', $id)->where('simulacro', 'Tu saber')->first();
		$lava = new Lavacharts; // See note below for Laravel	
		$materias = $lava->DataTable();
		$materias->addStringColumn('Simulacros');
		$materias->addNumberColumn('Matemáticas');
		$materias->addNumberColumn('Lenguaje');
		$materias->addNumberColumn('Sociales y ciudadanas');
		$materias->addNumberColumn('Ciencias naturales');
		$materias->addNumberColumn('Inglés');
		$materias->setDateTimeFormat('Y');

		for ($i=0; $i < sizeof($informar); $i++) { 
			$simu = '.';
			$materias->addRow([
				$simu,
				$informar->proMat1,
				$informar->proMat2,
				$informar->proMat3,
				$informar->proMat4,
				$informar->proMat5,
				]);
		}

		$lava->ColumnChart('Simulacros', $materias, [
		    'titleTextStyle' => [
			        'color'    => '#6f6ae1',
			        'fontSize' => 50,
		    ],
		    'legend' => ['position' => 'none'],
		    'colors' => ['#E11D23', '#DAA10E', '#972C8E', '#A8A913', '#49ABAA'],
		    'datatable' => $materias,
		    'barGroupWidth'  =>  10,  ///int | 'string'
		    'width' => 490,
		    'height' => 330,
		    'isStacked' => false,
			'vAxis' => ['format' => 'decimal',
						'minValue' => 0,
						'minValue' => 0,
						'maxValue' => 100,
						'gridlines' => [ 'count' => 6],
						],
			'hAxis' => ['format' => 'decimal',],

		]);

        return view('informes.generar-saber-media', ['informar' => $informar, 'lava' => $lava]);
	}

    public function getGenerarSaberBasica($id)
	{
		$usuario = Auth::user();
		$informar = Informe::where('id', $id)->where('simulacro', 'Tu saber')->first();
		$lava = new Lavacharts; // See note below for Laravel	
		$materias = $lava->DataTable();
		$materias->addStringColumn('Simulacros');
		$materias->addNumberColumn('Cognitiva');
		$materias->addNumberColumn('Comunicativa');
		$materias->addNumberColumn('Socio-Afectiva');
		$materias->setDateTimeFormat('Y');

		for ($i=0; $i < sizeof($informar); $i++) { 
			$simu = '.';
			$materias->addRow([
				$simu,
				$informar->proMat1,
				$informar->proMat2,
				$informar->proMat3
				]);
		}

		$lava->ColumnChart('Simulacros', $materias, [
		    'titleTextStyle' => [
			        'color'    => '#6f6ae1',
			        'fontSize' => 50,
		    ],
		    'legend' => ['position' => 'none'],
		    'colors' => ['#49ABAA', '#A8A913', '#DAA10E'],
		    'datatable' => $materias,
		    'barGroupWidth'  =>  5,  ///int | 'string'
		    'width' => 490,
		    'height' => 330,
		    'isStacked' => false,
			'vAxis' => ['format' => 'decimal',
						'minValue' => 0,
						'maxValue' => 100,
						'gridlines' => [ 'count' => 6],    
						],
			'hAxis' => ['format' => 'decimal',
			],
		]);  
        return view('informes.generar-saber-basica', ['informar' => $informar, 'lava' => $lava]);
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}

}
