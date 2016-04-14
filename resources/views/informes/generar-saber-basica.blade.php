<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Simulacro saber</title>
        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    </head>  
    <body>
        <div style="text-align: center; font: 80%; font-family: Geneva, Cambria, monospace, Arial, Helvetica, sans-serif">
                <img class="custom_logo ie_png"  style="position: absolute;top: 0px;left: 0px;width: auto;" src="/imagenes/fondo-saber-basica.png">
                
                <div style="position: absolute;top: 320px;left: 105px;width: 400px;"  id="perf_div">
                    <?= $lava->render('ColumnChart', 'Simulacros', 'perf_div') ?>
                </div>

                <div style="position: absolute;top: 760px;left: 245px;width: 50px;">
                    <span>{{ $informar->proMat1 }}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 760px;left: 390px;width: 86px;">
                    <span>{{ $informar->proMat2}}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 760px;left: 540px;width: 86px;">
                    <span>{{ $informar->proMat3}}<span>&nbsp;</span>
                </div>

            <!-- Datos del personales del estudiante -->
            <div style="position: absolute;top: 188px;left: 96px;width: 350px;">
                <span>{{ $informar->NombreEstudiante }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 188px;left: 486px;width: 250px;">
                <span>{{ $informar->colegio }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 225px;left: 546px;width:116px;">
                <span>{{ $informar->codigo }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 225px;left: 347px;width:116px;">
                <span>{{ $informar->FechaAplico }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 225px;left: 200px;width:116px;">
                <span>{{ $informar->puesto }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 225px;left: 66px;width: 116px;">
                <span>{{ $informar->grado }}<span>&nbsp;</span>
            </div>

            <!-- Datos PUNTAJE materias  -->
        <div style="position: absolute;left: 0px;width: 0px;">
             <button  type="button" class="btn btn-default" onClick="window.print()">Imprimir</button>
        </div>
        </div>
    </body>
</html>