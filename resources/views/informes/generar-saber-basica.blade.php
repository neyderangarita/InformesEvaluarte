<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Simulacro saber</title>
        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    </head>  
    <body>
        <div style="text-align: center; font: 70%; font-family: Geneva, Cambria, monospace, Arial, Helvetica, sans-serif">
                <img class="custom_logo ie_png"  style="position: absolute;top: 0px;left: 0px;width: auto;" src="/imagenes/fondo-saber-basica.png">
                
                <div style="position: absolute;top: 302px;left: 102px;width: 400px;"  id="perf_div">
                    <?= $lava->render('ColumnChart', 'Simulacros', 'perf_div') ?>
                </div>

                <div style="position: absolute;top: 745px;left: 235px;width: 50px;">
                    <span>{{ $informar->proMat1 }}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 745px;left: 380px;width: 86px;">
                    <span>{{ $informar->proMat2}}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 745px;left: 540px;width: 86px;">
                    <span>{{ $informar->proMat3}}<span>&nbsp;</span>
                </div>

            <!-- Datos del personales del estudiante -->
            <div style="position: absolute;top: 170px;left: 66px;width: 350px;">
                <span>{{ $informar->NombreEstudiante }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 170px;left: 456px;width: 250px;">
                <span>{{ $informar->colegio }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 216px;left: 556px;width:116px;">
                <span>{{ $informar->codigo }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 216px;left: 357px;width:116px;">
                <span>{{ $informar->FechaAplico }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 216px;left: 200px;width:116px;">
                <span>{{ $informar->puesto }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 216px;left: 60px;width: 116px;">
                <span>{{ $informar->grado }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;left: 0px;width: 0px;">                             
                <a  onClick="window.print();return false" href="#"> 
                    <img width="auto" height="45px" src="/imagenes/impresora.png">  
                </a>
            </div>

        </div>
    </body>
</html>