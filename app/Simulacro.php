<?php namespace GestorImagenes;

use Illuminate\Database\Eloquent\Model;

class Simulacro extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'simulacros';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'nombre', 'email_id'];

	public function propietario()
	{
		return $this->belongsTo('GestorImagenes\Usuario');	
	}
}
