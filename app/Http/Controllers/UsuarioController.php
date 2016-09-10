<?php namespace GestorImagenes\Http\Controllers;

use GestorImagenes\Http\Requests\EditarPerfilRequest;
use Illuminate\Support\Facades\Auth;
use GestorImagenes\Usuario;

use GestorImagenes\Http\Requests\CargarUsuariosRequest;
use Carbon\Carbon;

use Input;
use Maatwebsite\Excel\Facades\Excel;

class UsuarioController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getEditarPerfil()
	{
		return view('usuario.actualizar');
	}

	public function postEditarPerfil(EditarPerfilRequest $request)
	{
		$usuario = Auth::user();
		$nombre = $request ->get('nombre');
		$usuario->nombre = $nombre;
		if ($request->has('password')) {
			$usuario->password = bcrypt($request->get('password'));
		}
		if ($request->has('pregunta')) {
			$usuario->pregunta = $request->get('pregunta');
			$usuario->respuesta = $request->get('respuesta');
		}
		$usuario->save();
		return redirect('/validado')->with('actualizado', 'Su perfil ha sido actualizado.');
	}

	public function getListarUsuarios()
	{
		$usuarios =  \DB::table('usuarios')->paginate(10);	
		return view('usuario.listar-usuarios', ['usuarios' => $usuarios]);
	}

    public function getCargarUsuarios()
    {
    	return view('usuario.cargar-usuarios');
    }

    public function postCargarUsuarios(CargarUsuariosRequest $request)
    {
		$imagen = $request->file('imagen');
		$ruta = '/img/';
		$nombre = 'usuarios'.'.'.$imagen->guessExtension();
		$imagen->move(getcwd().$ruta, $nombre);

		$result = Excel::load('public/img/usuarios.xlsx')->get();	

    	foreach ($result as $informe) 
    	{		
     			Usuario::create([
     				'id' => $informe->id,
     				'nombre' =>$informe->nombre,
     				'email' => $informe->email,
     				'password' =>bcrypt($informe->password),
     				'tipo' =>$informe->tipo,
     			]);                                                                                                                                                                                                                                         
    	}

		return redirect("/")->with('creada', 'Archivo subido');
    }


	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
