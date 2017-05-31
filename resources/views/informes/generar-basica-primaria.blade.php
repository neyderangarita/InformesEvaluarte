<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Simulacro saber</title>
        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    </head>  
    <body>
        <div style="text-align: center; font: 80%; font-family: "Homer Simpson", cursive">
                <img class="custom_logo ie_png"  style="position: absolute;top: 0px;left: 0px;width: auto;" src="/imagenes/fondo2.jpg">
                
                <div style="position: absolute;top: 290px;left: 105px;width: 200%;"  id="perf_div">
                    <?= $lava->render('ColumnChart', 'Simulacros', 'perf_div') ?>
                </div>
                
                <div style="position: absolute;top: 730px;left: 300px;width: 50px;">
                    <span>{{ $informar->proMat1 }}<span>&nbsp;</span>
                </div>
                <div style="position: absolute;top: 730px;left: 517px;width: 86px;">
                    <span>{{ $informar->proMat4}}<span>&nbsp;</span>
                </div>
                <div style="position: absolute;top: 800px;left: 346px;width: 86px;">
                    <span>{{ round(($informar->proMat1 + $informar->proMat4)/ 2)}}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 800px;left: 596px;width: 86px;">
                    <span>
                        <?php 
                            $media = round(($informar->proMat1 + $informar->proMat4)/ 2);
                            $devs = [];
                            $array = array($informar->proMat1, $informar->proMat4);
                            foreach ($array as $key =>$valor) {
                                $devs[$key]  = pow($valor-round(($informar->proMat1 + $informar->proMat4)/ 2), 2); 
                            }                 
                            $varianza = sqrt(array_sum($devs)/(count($devs)));
                        ?>
                        <?php 
                            echo  round($varianza, 1);
                         ?>       
                    <span>&nbsp;</span>
                </div>
            <!-- Datos del personales del estudiante -->
            <div style="position: absolute;top: 152px;left: 117px;width: 313px;">
                <span>{{ $informar->NombreEstudiante }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 152px;left: 521px;width: 86px;">
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