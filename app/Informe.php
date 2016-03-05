<?php namespace GestorImagenes;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
	protected $table = 'informes';
	
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
			,'simulacro'
			,'grado'	
			,'codigo'
			,'puesto'
			];
  
	public function propietario()
	{
		return $this->belongTo('GestorImagenes\Usuario', 'codigo');
	}
}