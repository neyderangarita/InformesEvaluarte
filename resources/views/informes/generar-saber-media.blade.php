<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Simulacro saber</title>
        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    </head>  
    <body>
        <div style="text-align: center; font: 80%; font-family: Geneva, Cambria, monospace, Arial, Helvetica, sans-serif">
                <img class="custom_logo ie_png"  style="position: absolute;top: 0px;left: 0px;width: auto;" src="/imagenes/fondo-saber-media.png">
                
                <div style="position: absolute;top: 294px;left: 91px;width: 400px;"  id="perf_div">
                    <?= $lava->render('ColumnChart', 'Simulacros', 'perf_div') ?>
                </div>

                <div style="position: absolute;top: 731px;left: 185px;width: 50px;">
                    <span>{{ $informar->proMat1 }}<span>&nbsp;</span>
                </div>
                <div style="position: absolute;top: 731px;left: 270px;width: 86px;">
                    <span>{{ $informar->proMat2}}<span>&nbsp;</span>
                </div>
                <div style="position: absolute;top: 731px;left: 370px;width: 86px;">
                    <span>{{ $informar->proMat3}}<span>&nbsp;</span>
                </div>
                <div style="position: absolute;top: 731px;left: 472px;width: 86px;">
                    <span>{{ $informar->proMat4}}<span>&nbsp;</span>
                </div>
                <div style="position: absolute;top: 731px;left: 573px;width: 86px;">
                    <span>{{ $informar->proMat5}}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 798px;left: 300px;width: 86px;">
                    <span>{{ round(($informar->proMat1 + $informar->proMat2 + $informar->proMat3 + $informar->proMat4 + $informar->proMat5)/ 5)}}<span>&nbsp;</span>
                </div>
                
                <div style="position: absolute;top: 798px;left: 560px;width: 86px;">
                    <span>
                        <?php 
                            $media = round(($informar->proMat1 + $informar->proMat2 + $informar->proMat3 + $informar->proMat4 + $informar->proMat5)/ 5);
                            $devs = [];

                            $array = array($informar->proMat1, $informar->proMat2, $informar->proMat3, $informar->proMat4, $informar->proMat5);
                            foreach ($array as $key =>$valor) {
                                $devs[$key]  = pow($valor-round(($informar->proMat1 + $informar->proMat2 + $informar->proMat3 + $informar->proMat4 + $informar->proMat5)/ 5), 2); 
                            }                 
                            $varianza = sqrt(array_sum($devs)/(count($devs)-1));
                        ?>
                        <?php 
                            echo  round($varianza, 1);
                         ?>       
                    <span>&nbsp;</span>
                </div>
            <!-- Datos del personales del estudiante -->
            <div style="position: absolute;top: 157px;left: 86px;width: 350px;">
                <span>{{ $informar->NombreEstudiante }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 157px;left: 446px;width: 250px;">
                <span>{{ $informar->colegio }}<span>&nbsp;</span>
            </div>
           <div style="position: absolute;top: 198px;left: 556px;width:116px;">
                <span>{{ $informar->codigo }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 198px;left: 357px;width:116px;">
                <span>{{ $informar->FechaAplico }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 198px;left: 190px;width:116px;">
                <span>{{ $informar->puesto }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 198px;left: 60px;width: 116px;">
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