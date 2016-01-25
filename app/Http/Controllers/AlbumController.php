<?php namespace GestorImagenes\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use GestorImagenes\Http\Requests\CrearAlbumRequest;
use GestorImagenes\Album;


class AlbumController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex()
	{
		$usuario = Auth::user();
		$albumes = $usuario->albumes;
		
		return view('albumes.mostrar', ['albumes' => $albumes]);
	}

	public function getCrearAlbum()
	{

		return view('albumes.crear-album');
	}

	public function postCrearAlbum(CrearAlbumRequest $request)
	{
		$usuario = Auth::user();
		Album::create
		(
			[
				'nombre' => $request->get('nombre'),
				'descripcion' => $request->get('descripcion'),
				'usuario_id' => $usuario->id
			]
		);

		return redirect('/validado/albumes/')->with('creado', 'El álbum ha sido creado');
	}

	public function getActualizarAlbum($id)
	{
		$album = album::find($id);
		return view('albumes.actualizar-album', ['album' => $album]);
	}

	public function postActualizarAlbum()
	{
		return 'actualizar Album';
	}

	public function getEliminarAlbum()
	{
		return 'Formulario de eliminar Album';
	}

	public function postEliminarAlbum()
	{
		return 'eliminar Album';
	}

	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
