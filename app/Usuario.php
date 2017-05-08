<?php namespace GestorImagenes;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
	protected $table = 'usuarios';
	protected $fillable = ['id', 'nombre', 'email', 'password', 'pregunta', 'respuesta', 'tipo'];
	protected $hidden = ['password', 'remember_token'];

	public function albumes()
	{
		return $this->hasMany('GestorImagenes\Album');
	}

	public function informes()
	{
		return $this->hasMany('GestorImagenes\Informe', 'codigo');
	}

    public function scopeBusqueda($query, $dato="")
    {
        $resultado= $query->where('id','like','%'.$dato.'%')
                              ->orWhere('nombre','like', '%'.$dato.'%')
                              ->orWhere('tipo','like', '%'.$dato.'%')
                              ->orWhere('email','like', '%'.$dato.'%'); 
        
        return  $resultado;
    }

}
