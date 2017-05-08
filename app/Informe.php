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

			,'Mat3Componentes1'
			,'Mat3Componentes2'
			,'Mat3Componentes3'

			,'Mat3Competencia1'
			,'Mat3Competencia2'
			,'Mat3Competencia3' 

			,'Mat4Componentes1'
			,'Mat4Componentes2'
			,'Mat4Componentes3'

			,'Mat5Componentes1'
			,'Mat5Componentes2'
			,'Mat5Componentes3'
			];
  
	public function propietario()
	{
		return $this->belongTo('GestorImagenes\Usuario', 'codigo');
	}


    public function scopeBusqueda($query, $dato="")
    {
        $resultado= $query->where('codigo_simulacro','like','%'.$dato.'%')
                              ->orWhere('NombreEstudiante','like', '%'.$dato.'%')
                              ->orWhere('colegio','like', '%'.$dato.'%')
                              ->orWhere('ciudad','like', '%'.$dato.'%')
                              ->orWhere('FechaAplico','like', '%'.$dato.'%')	
                              ->orWhere('simulacro','like', '%'.$dato.'%')
                              ->orWhere('grado','like', '%'.$dato.'%')
                              ->orWhere('codigo','like', '%'.$dato.'%')
                              ->orWhere('puesto','like', '%'.$dato.'%');         
        return  $resultado;
    }

}