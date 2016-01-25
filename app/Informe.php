<?php namespace GestorImagenes;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'informes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'codigo_simulacro', 'proTotal', 'Materia1', 
						   	'proMat1', 'codigo'];
  
	public function propietario()
	{
		return $this->belongTo('GestorImagenes\Usuario', 'codigo');
	}
}