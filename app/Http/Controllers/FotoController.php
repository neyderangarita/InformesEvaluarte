<?php namespace GestorImagenes\Http\Controllers;

use GestorImagenes\Http\Requests\MostrarFotosRequest;
use GestorImagenes\Http\Requests\MostrarFotosAdminRequest;
use GestorImagenes\Http\Requests\CrearFotoRequest;
use GestorImagenes\Http\Requests\ActualizarFotoRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GestorImagenes\Album;
use GestorImagenes\Foto;

class FotoController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex(MostrarFotosRequest $request)
	{
		$id = $request->get('id');
		$fotos = Album::find($id)->fotos;
		return view('fotos.mostrar', ['fotos' => $fotos, 'id' => $id]);
	}

	public function getAdminArchivos(MostrarFotosAdminRequest $request)
	{
		$id = $request->get('id');
		$fotos = Album::find($id)->fotos;
		return view('fotos.mostrar', ['fotos' => $fotos, 'id' => $id]);
	}

	public function getCrearFoto(Request $request)
	{	
		$id = $request->get('id');
		return view('fotos.crear-foto', ['id' => $id]);
	}

	public function postCrearFoto(CrearFotoRequest $request)
	{
		$id = $request->get('id');
		$imagen = $request->file('imagen');
		$ruta = '/img/';
		$nombre = sha1(Carbon::now()).'.'.$imagen->guessExtension();
		$imagen->move(getcwd().$ruta, $nombre);

		Foto::create
		(
			[
				'nombre' => $request->get('nombre'),
				'descripcion' => $request->get('descripcion'),
				'ruta' => $ruta.$nombre,
				'album_id' => $id
			]
		);
		return redirect("/validado/fotos/admin-archivos?id=$id")->with('creada', 'La foto ha sido subida');
	}

	public function getActualizarFoto($id)
	{
		$foto = Foto::find($id);
		return view('fotos.actualizar-foto-admin', [ 'foto' => $foto]);
	}

	public function postActualizarFoto(ActualizarFotoRequest $request)
	{
		$foto = Foto::find($request->get('id'));
		$foto->nombre = $request->get('nombre');
		$foto->descripcion = $request->get('descripcion');

		if($request->hasFile('imagen'))
		{
			$imagen = $request->file('imagen');
			$ruta = '/img/';
			$nombre = sha1(Carbon::now()).'.'.$imagen->guessExtension();
			$imagen->move(getcwd().$ruta, $nombre);

			$rutaAnterior = getcwd().$foto->ruta;

			if(file_exists($rutaAnterior))
			{
				unlink(realpath($rutaAnterior));
			}

			$foto->ruta = $ruta.$nombre;
		}

		$foto->save();

		return redirect('validado/albumes/admin-informes');
	}

	public function getEliminarFoto()
	{
		return 'Formulario de eliminar fotos';
	}

	public function postEliminarFoto()
	{
		return 'eliminar foto';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
