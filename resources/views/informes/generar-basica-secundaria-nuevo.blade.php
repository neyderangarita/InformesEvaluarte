<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Simulacro saber</title>
        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    </head>  
    <body>
        <div style="text-align: center; font: 80%; font-family: "Homer Simpson", cursive">
                <img class="custom_logo ie_png"  style="position: absolute;top: 0px;left: 0px;width: auto;" src="/imagenes/fondo5.jpg">
                
                <div style="position: absolute;top: 290px;left: 105px;width: 400px;"  id="perf_div">
                    <?= $lava->render('ColumnChart', 'Simulacros', 'perf_div') ?>
                </div>

                <div style="position: absolute;top: 730px;left: 205px;width: 50px;">
                    <span>{{ $informar->proMat1 }}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 730px;left: 290px;width: 86px;">
                    <span>{{ $informar->proMat2 }}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 730px;left: 395px;width: 86px;">
                    <span>{{ $informar->proMat3 }}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 730px;left: 506px;width: 86px;">
                    <span>{{ $informar->proMat4 }}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 800px;left: 320px;width: 86px;">
                    <span>{{ round(($informar->proMat1 + $informar->proMat2 + $informar->proMat3 + $informar->proMat4 )/ 4)}}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 800px;left: 594px;width: 86px;">
                    <span>
                        <?php 
                            $media = round(($informar->proMat1 + $informar->proMat2 + $informar->proMat3 + $informar->proMat4 )/ 4);
                            $devs = [];

                            $array = array($informar->proMat1, $informar->proMat2, $informar->proMat3, $informar->proMat4);
                            foreach ($array as $key =>$valor) {
                                $devs[$key]  = pow($valor-round(($informar->proMat1 + $informar->proMat2 + $informar->proMat3 + $informar->proMat4)/ 4), 2); 
                            }                 
                            $varianza = sqrt(array_sum($devs)/(count($devs)));
                        ?>
                        <?php 
                            echo  round($varianza);
                         ?>       
                    <span>&nbsp;</span>
                </div>
            <!-- Datos del personales del estudiante -->
            <div style="position: absolute;top: 152px;left: 80px;width: 350px;">
                <span>{{ $informar->NombreEstudiante }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 152px;left: 481px;width: 286px;">
                <span>{{ $informar->colegio }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 195px;left: 586px;width: 86px;">
                <span>{{ $informar->codigo }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 195px;left: 387px;width: 86px;">
                <span>{{ $informar->FechaAplico }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 195px;left: 218px;width: 86px;">
                <span>{{ $informar->puesto }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 195px;left: 84px;width: 86px;">
                <span>{{ $informar->grado }}<span>&nbsp;</span>
            </div>
            <!-- Datos PUNTAJE materias  -->
        <div style="position: absolute;left: 0px;width: 0px;">
             <button  type="button" class="btn btn-default" onClick="window.print()">Imprimir</button>
        </div>
        </div>
    </body>
</html>