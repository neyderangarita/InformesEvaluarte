<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Simulacro saber</title>
    </head>  
    <body>
        <div style="text-align: center; font: 80%; font-family: "Homer Simpson", cursive">
            <img src="imagenes/fondo.png" />
            <!-- Datos del personales del estudiante -->
            <div style="position: absolute;top: 125px;left: 0;width: 27%;">
                <span>{{ $informar->codigo }}<span>&nbsp;</span>
            </div>

           <div style="position: absolute;top: 165px;left: 0;width: 27%;">
                <span>{{ $informar->puesto }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 125px;left: 0;width: 92%;">
                <span>{{ $informar->NombreEstudiante }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 125px;left: 0;width: 185%;">
                <span>{{ $informar->FechaAplico }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 165px;left: 0;width: 86%;">
                <span>{{ $informar->colegio }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 165px;left: 0;width: 190%;">
                <span>{{ $informar->ciudad }}<span>&nbsp;</span>
            </div>
            <!-- Datos PUNTAJE materias -->
            <div style="position: absolute;top: 285px;left: 0;width: 48%;">
                <span>{{ $informar->proMat4 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 345px;left: 0;width: 48%;">
                <span>{{ $informar->proMat1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 405px;left: 0;width: 48%;">
                <span>{{ $informar->proMat5 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 455px;left: 0;width: 48%;">
                <span>{{ $informar->proMat2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 515px;left: 0;width: 48%;">
                <span>{{ $informar->proMat3 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 575px;left: 0;width: 48%;">
                <span>{{ $informar->proTotal }}<span>&nbsp;</span>
            </div>
            <!-- DATOS SUB AREA -->
            <div style="position: absolute;top: 345px;left: 0;width: 78%;">
                <span>{{ $informar->cuantitativo }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 405px;left: 0;width: 78%;">
                <span>{{ $informar->competencias_ciudadanas }}<span>&nbsp;</span>
            </div>
            <!-- DATOS NIVEL INGLES -->
            <div style="position: absolute;top: 507px;left: 0;width: 108%;">
                <span>{{ $informar->NivelIngles }}<span>&nbsp;</span>
            </div>
            <!-- DATOS COMPETENCIAS -->

            <div style="position: absolute;top: 273px;left: 0;width: 128%;">
                <span>{{ $informar->Mat4Competencia1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 273px;left: 0;width: 140%;">
                <span>{{ $informar->Mat4Competencia2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 273px;left: 0;width: 153%;">
                <span>{{ $informar->Mat4Competencia3 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 303px;left: 0;width: 128%;">
                <span>{{ $informar->Competencia1Mat4 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 303px;left: 0;width: 140%;">
                <span>{{ $informar->Competencia2Mat4 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 303px;left: 0;width: 153%;">
                <span>{{ $informar->Competencia3Mat4 }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 333px;left: 0;width: 128%;">
                <span>{{ $informar->Mat1Competencia1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 333px;left: 0;width: 140%;">
                <span>{{ $informar->Mat1Competencia2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 333px;left: 0;width: 153%;">
                <span>{{ $informar->Mat1Competencia3 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 361px;left: 0;width: 128%;">
                <span>{{ $informar->Competencia1Mat1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 361px;left: 0;width: 140%;">
                <span>{{ $informar->Competencia2Mat1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 361px;left: 0;width: 153%;">
                <span>{{ $informar->Competencia3Mat1 }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 391px;left: 0;width: 128%;">
                <span>{{ $informar->Mat5Competencia1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 391px;left: 0;width: 140%;">
                <span>{{ $informar->Mat5Competencia2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 391px;left: 0;width: 153%;">
                <span>{{ $informar->Mat5Competencia3 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 420px;left: 0;width: 128%;">
                <span>{{ $informar->Competencia1Mat5 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 420px;left: 0;width: 140%;">
                <span>{{ $informar->Competencia2Mat5 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 420px;left: 0;width: 153%;">
                <span>{{ $informar->Competencia3Mat5 }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 451px;left: 0;width: 128%;">
                <span>{{ $informar->Mat2Competencia1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 451px;left: 0;width: 140%;">
                <span>{{ $informar->Mat2Competencia2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 451px;left: 0;width: 153%;">
                <span>{{ $informar->Mat2Competencia3 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 479px;left: 0;width: 128%;">
                <span>{{ $informar->Competencia1Mat2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 479px;left: 0;width: 140%;">
                <span>{{ $informar->Competencia2Mat2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 479px;left: 0;width: 153%;">
                <span>{{ $informar->Competencia3Mat2 }}<span>&nbsp;</span>
            </div>
            
            <!-- DATOS COMPONENTES -->
            <div style="position: absolute;top: 333px;left: 0;width: 167%;">
                <span>{{ $informar->Mat1Componentes1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 333px;left: 0;width: 175%;">
                <span>{{ $informar->Mat1Componentes2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 333px;left: 0;width: 184%;">
                <span>{{ $informar->Mat1Componentes3 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 361px;left: 0;width: 167%;">
                <span>{{ $informar->Componentes1Mat1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 361px;left: 0;width: 175%;">
                <span>{{ $informar->Componentes2Mat1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 361px;left: 0;width: 184%;">
                <span>{{ $informar->Componentes3Mat1 }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 451px;left: 0;width: 167%;">
                <span>{{ $informar->Mat2Componentes1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 451px;left: 0;width: 175%;">
                <span>{{ $informar->Mat2Componentes2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 451px;left: 0;width: 184%;">
                <span>{{ $informar->Mat2Componentes3 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 479px;left: 0;width: 167%;">
                <span>{{ $informar->Componentes1Mat2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 479px;left: 0;width: 175%;">
                <span>{{ $informar->Componentes2Mat2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 479px;left: 0;width: 184%;">
                <span>{{ $informar->Componentes3Mat2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 451px;left: 0;width: 192%;">
                <span>{{ $informar->Mat2Componentes4 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 479px;left: 0;width: 192%;">
                <span>{{ $informar->Componentes4Mat2 }}<span>&nbsp;</span>
            </div>

        </div>  
    </body>
</html>