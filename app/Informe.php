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
	protected $fillable = 
			['id'
			,'codigo_simulacro'
			,'Materia1'
			,'proMat1'
			,'Materia2'
			,'proMat2'
			,'Materia3'
			,'proMat3'
			,'Materia4'
			,'proMat4'
			,'Materia5'
			,'proMat5'
			,'proTotal'
			,'cuantitativo'
			,'competencias_ciudadanas'
			,'Mat1Componentes1'
			,'Mat1Componentes2'
			,'Mat1Componentes3'
			,'Mat1Competencia1'
			,'Mat1Competencia2'
			,'Mat1Competencia3'
			,'Mat2Componentes1'
			,'Mat2Componentes2'
			,'Mat2Componentes3'
			,'Mat2Componentes4'
			,'Mat2Competencia1'
			,'Mat2Competencia2'
			,'Mat2Competencia3'
			,'Mat4Competencia1'
			,'Mat4Competencia2'
			,'Mat4Competencia3'
			,'Mat5Competencia1'
			,'Mat5Competencia2'
			,'Mat5Competencia3'
			,'NombreEstudiante'
			,'colegio'
			,'ciudad'
			,'FechaAplico'
			,'NivelIngles'
			,'Componentes1Mat1'
			,'Componentes2Mat1'
			,'Componentes3Mat1'
			,'Competencia1Mat1'
			,'Competencia2Mat1'
			,'Competencia3Mat1'
			,'Componentes1Mat2'
			,'Componentes2Mat2'
			,'Componentes3Mat2'
			,'Componentes4Mat2'
			,'Competencia1Mat2'
			,'Competencia2Mat2'
			,'Competencia3Mat2'
			,'Competencia1Mat4'
			,'Competencia2Mat4'
			,'Competencia3Mat4'
			,'Competencia1Mat5'
			,'Competencia2Mat5'
			,'Competencia3Mat5'
			,'simulacro'	
			,'codigo'];
  
	public function propietario()
	{
		return $this->belongTo('GestorImagenes\Usuario', 'codigo');
	}
}