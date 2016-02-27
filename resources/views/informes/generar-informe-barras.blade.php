<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Simulacro saber</title>
    </head>  
    <body>
        <div style="text-align: center; font: 80%; font-family: "Homer Simpson", cursive">

            @if($informar->grado == '3°' || $informar->grado == '4°')
               <!--  <img src="imagenes/fondo2.jpg" />   -->

                <div style="position: absolute;top: 730px;left: 0;width: 80%;">
                    <span>{{ $informar->proMat1 }}<span>&nbsp;</span>
                </div>
                <div style="position: absolute;top: 730px;left: 0;width: 150%;">
                    <span>{{ $informar->proMat2 }}<span>&nbsp;</span>
                </div>
                <div style="position: absolute;top: 795px;left: 0;width: 98%;">
                    <span>{{ round(($informar->proMat1 + $informar->proMat2)/ 2)}}<span>&nbsp;</span>
                </div>

                <div style="position: absolute;top: 795px;left: 0;width: 168%;">
                    <span>
                    
                        <?php 
                            $media = round(($informar->proMat1 + $informar->proMat2)/ 2);
                            $devs = [];
                            $array = array($informar->proMat1, $informar->proMat2);
                            foreach ($array as $key =>$valor) {
                                $devs[$key]  = pow($valor-round(($informar->proMat1 + $informar->proMat2)/ 2), 2); 
                            }                 
                            $varianza = sqrt(array_sum($devs)/(count($devs)-1));
                        ?>
                        <?php 
                            echo  round($varianza, 1);
                         ?>       
                    <span>&nbsp;</span>
                </div>

            @elseif($informar->grado == '5°' || $informar->grado == '6°' || $informar->grado == '7°' || $informar->grado == '8°' || $informar->grado == '9°')
                <img src="imagenes/fondo5.jpg" /> 

            @elseif($informar->grado == '10°' || $informar->grado == '11°')                           
                <img src="imagenes/fondo.png" />         
            @endif

            <!-- Datos del personales del estudiante -->
            <div style="position: absolute;top: 147px;left: 0;width: 55%;">
                <span>{{ $informar->NombreEstudiante }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 147px;left: 0;width: 150%;">
                <span>{{ $informar->colegio }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 188px;left: 0;width: 165%;">
                <span>{{ $informar->codigo }}<span>&nbsp;</span>
            </div>

           <div style="position: absolute;top: 188px;left: 0;width: 22%;">
                <span>{{ $informar->grado }}<span>&nbsp;</span>
            </div>

           <div style="position: absolute;top: 188px;left: 0;width: 59%;">
                <span>{{ $informar->puesto }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 188px;left: 0;width: 109%;">
                <span>{{ $informar->FechaAplico }}<span>&nbsp;</span>
            </div>


<!--             <div id="container" style="width: 300px; height: 300px; margin: 0 auto; border:1px solid black;"></div>
            <canvas id="canvas" style="width: 300px; height: 300px; margin: 0 auto; border:1px solid blue;"></canvas>
            <div id="photo"></div> -->

            <!-- Datos PUNTAJE materias -->
        </div>  
    </body>

<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>

<script type="text/javascript">
    // $(function () {
    //     $('#container').highcharts(
    //      {!! json_encode($yourFirstChart) !!}
    //  );
    // });
/*
    $(function () {
        $('#container').highcharts(

        {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Fruit Consumption'
            },
            xAxis: {
                categories: ['Apples', 'Bananas', 'Oranges']
            },
            yAxis: {
                title: {
                    text: 'Fruit eaten'
                }
            },
            series: [{
                name: 'Jane',
                data: [1, 0, 4]
            }, {
                name: 'John',
                data: [5, 7, 3]
            }],
        }

    );
    });
*/

/*
    function exportChart() {
        var svg = canvg(document.getElementById('canvas'), getSVG(), {
        });
    }

    function getSVG() {
        var chart = $('#container').highcharts();
        var svg = chart.getSVG();
        return svg;
    }

    $(document).ready(function(){
        exportChart();
        var canvas = document.getElementById("canvas");
        var img = canvas.toDataURL("image/png");
        document.getElementById('photo').innerHTML='<img src='+img+' alt="" />';
        $('#container').hide();
        $('#canvas').hide();
    }); 
*/

var chart;
    $(document).ready(function() {

        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'graficaLineal',  // Le doy el nombre a la gráfica
                defaultSeriesType: 'line'   // Pongo que tipo de gráfica es
            },
            title: {
                text: 'Datos de las Visitas'    // Titulo (Opcional)
            },
            subtitle: {
                text: 'Jarroba.com'     // Subtitulo (Opcional)
            },
            // Pongo los datos en el eje de las 'X'
            xAxis: {
                categories: ['Feb12','Mar12','Abr12','May12','Jun12','Jul12','Ago12','Sep12','Oct12','Nov12',
'Dic12','Ene13','Feb13','Mar13','Abr13','May13','Jun13'],
                // Pongo el título para el eje de las 'X'
                title: {
                    text: 'Meses'
                }
            },
            yAxis: {
                // Pongo el título para el eje de las 'Y'
                title: {
                    text: 'Nº Visitas'
                }
            },
            // Doy formato al la "cajita" que sale al pasar el ratón por encima de la gráfica
            tooltip: {
                enabled: true,
                formatter: function() {
                    return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y +' '+this.series.name;
                }
            },
            // Doy opciones a la gráfica
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: true
                }
            },
            // Doy los datos de la gráfica para dibujarlas
            series: [{
                        name: 'Visitas',
                        data: [103,474,402,536,1041,270,0,160,2462,3797,3527,4505,8090,7493,7048,11408,10886]
                    },
                    {
                        name: 'Visitantes Únicos',
                        data: [21,278,203,370,810,213,0,134,1991,3122,2870,3655,6400,5818,5581,8529,8261]
                    },
                    {
                        name: 'Páginas Vistas',
                        data: [1064,1648,1040,1076,2012,397,0,325,3732,6067,5226,6482,11503,11937,9751,16061,15643]
                    }],
        }); 
    }); 


</script>

</html>