<?php namespace GestorImagenes;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	protected $table = 'albumes';
	protected $fillable = ['id', 'nombre', 'descripcion', 'usuario_id'];

	public function fotos()
	{
		return $this->hasMany('GestorImagenes\Foto');
	}

	public function propietario()
	{
		return $this->belongsTo('GestorImagenes\Usuario');	
	}
}
