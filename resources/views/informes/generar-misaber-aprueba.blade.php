<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Simulacro saber</title>
    </head>  
    <body>
        <div style="text-align: center; font: 80%; font-family: "Homer Simpson", cursive">
            <img src="imagenes/misaberaprueba.jpg" />
            <!-- Datos del personales del estudiante -->
            <div style="position: absolute;top: 138px;left: 0;width: 27%;">
                <span>{{ $informar->codigo }}<span>&nbsp;</span>
            </div>

           <div style="position: absolute;top: 180px;left: 0;width: 27%;">
                <span>{{ $informar->puesto }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 138px;left: 0;width: 92%;">
                <span>{{ $informar->NombreEstudiante }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 138px;left: 0;width: 183%;">
                <span>{{ $informar->FechaAplico }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 180px;left: 0;width: 86%;">
                <span>{{ $informar->colegio }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 180px;left: 0;width: 177%;">
                <span>{{ $informar->ciudad }}<span>&nbsp;</span>
            </div>
            <!-- Datos PUNTAJE materias -->
            <div style="position: absolute;top: 300px;left: 0;width: 42%;">
                <span>{{ $informar->proMat2 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 360px;left: 0;width: 42%;">
                <span>{{ $informar->proMat1 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 420px;left: 0;width: 42%;">
                <span>{{ $informar->proMat3 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 480px;left: 0;width: 42%;">
                <span>{{ $informar->proMat4 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 540px;left: 0;width: 42%;">
                <span>{{ $informar->proMat5 }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 600px;left: 0;width: 42%;">
                <span>
                    {{ round(($informar->proMat4 * 3) * (5/13)) + round(($informar->proMat1 * 3) * (5/13)) + round(($informar->proMat5 * 3) * (5/13)) + round(($informar->proMat2 * 3) * (5/13)) + round($informar->proMat3 * (5/13)) }}
                <span>&nbsp;</span>
            </div>

            <!-- DATOS NIVEL DE DESEMPEÑO -->
            <div style="position: absolute;top: 300px;left: 0;width: 64%;">
                <span>
                    @if( str_replace( ',', '.',$informar->proMat2) >=0 && str_replace( ',', '.',$informar->proMat2) <= 40)
                        Insuficiente 
                    @elseif(str_replace( ',', '.',$informar->proMat2) > 40 && str_replace( ',', '.',$informar->proMat2) <= 68)
                        Mínimo
                    @elseif(str_replace( ',', '.',$informar->proMat2) > 68 && str_replace( ',', '.',$informar->proMat2) <= 80)
                        Satisfactorio
                    @elseif(str_replace( ',', '.',$informar->proMat2) > 80 && str_replace( ',', '.',$informar->proMat2) <= 100)
                        Avanzado
                    @endif 
                <span>&nbsp;</span>
            </div>            

            <div style="position: absolute;top: 360px;left: 0;width: 64%;">
                <span>
                    @if( str_replace( ',', '.',$informar->proMat1) >=0 && str_replace( ',', '.',$informar->proMat1) <= 40)
                        Insuficiente 
                    @elseif(str_replace( ',', '.',$informar->proMat1) > 40 && str_replace( ',', '.',$informar->proMat1) <= 68)
                        Mínimo
                    @elseif(str_replace( ',', '.',$informar->proMat1) > 68 && str_replace( ',', '.',$informar->proMat1) <= 80)
                        Satisfactorio
                    @elseif(str_replace( ',', '.',$informar->proMat1) > 80 && str_replace( ',', '.',$informar->proMat1) <= 100)
                        Avanzado
                    @endif 
                <span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 420px;left: 0;width: 64%;">
                <span>
                    @if( str_replace( ',', '.',$informar->proMat3) >=0 && str_replace( ',', '.',$informar->proMat3) <= 40)
                        Insuficiente 
                    @elseif(str_replace( ',', '.',$informar->proMat3) > 40 && str_replace( ',', '.',$informar->proMat3) <= 68)
                        Mínimo
                    @elseif(str_replace( ',', '.',$informar->proMat3) > 68 && str_replace( ',', '.',$informar->proMat3) <= 80)
                        Satisfactorio
                    @elseif(str_replace( ',', '.',$informar->proMat3) > 80 && str_replace( ',', '.',$informar->proMat3) <= 100)
                        Avanzado
                    @endif 
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 480px;left: 0;width: 64%;">
                <span>
                    @if( str_replace( ',', '.',$informar->proMat4) >=0 && str_replace( ',', '.',$informar->proMat4) <= 40)
                        Insuficiente 
                    @elseif(str_replace( ',', '.',$informar->proMat4) > 40 && str_replace( ',', '.',$informar->proMat4) <= 68)
                        Mínimo
                    @elseif(str_replace( ',', '.',$informar->proMat4) > 68 && str_replace( ',', '.',$informar->proMat4) <= 80)
                        Satisfactorio
                    @elseif(str_replace( ',', '.',$informar->proMat4) > 80 && str_replace( ',', '.',$informar->proMat4) <= 100)
                        Avanzado
                    @endif 
                <span>&nbsp;</span>
            </div>


            <!-- DATOS SUB AREA -->
            <div style="position: absolute;top: 368px;left: 0;width: 89%;">
                <span>{{ round($informar->cuantitativo, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 425px;left: 0;width: 89%;">
                <span>{{ round($informar->competencias_ciudadanas, 2) }}<span>&nbsp;</span>
            </div>

            <!-- DATOS NIVEL INGLES -->
            <div style="position: absolute;top: 536px;left: 0;width: 60%;">
                <span>{{ $informar->NivelIngles }}<span>&nbsp;</span>
            </div>


            <!-- DATOS COMPETENCIAS -->
            <div style="position: absolute;top: 285px;left: 0;width: 128%;">
                <span>{{ round($informar->Mat2Competencia1, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 285px;left: 0;width: 140%;">
                <span>{{ round($informar->Mat2Competencia2, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 285px;left: 0;width: 153%;">
                <span>{{ round($informar->Mat2Competencia3, 2) }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 315px;left: 0;width: 128%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat2Competencia1) >=0 && str_replace( ',', '.',$informar->Mat2Competencia1) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat2Competencia1) > 3 && str_replace( ',', '.',$informar->Mat2Competencia1) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat2Competencia1) > 7 && str_replace( ',', '.',$informar->Mat2Competencia1) <= 10)
                        III
                    @endif 
                    <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 315px;left: 0;width: 140%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat2Competencia2) >=0 && str_replace( ',', '.',$informar->Mat2Competencia2) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat2Competencia2) > 3 && str_replace( ',', '.',$informar->Mat2Competencia2) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat2Competencia2) > 7 && str_replace( ',', '.',$informar->Mat2Competencia2) <= 10)
                        III
                    @endif 
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 315px;left: 0;width: 153%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat2Competencia3) >=0 && str_replace( ',', '.',$informar->Mat2Competencia3) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat2Competencia3) > 3 && str_replace( ',', '.',$informar->Mat2Competencia3) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat2Competencia3) > 7 && str_replace( ',', '.',$informar->Mat2Competencia3) <= 10)
                        III
                    @endif 
                <span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 345px;left: 0;width: 128%;">
                <span>{{ round($informar->Mat1Competencia1, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 345px;left: 0;width: 140%;">
                <span>{{ round($informar->Mat1Competencia2, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 345px;left: 0;width: 153%;">
                <span>{{ round($informar->Mat1Competencia3, 2) }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 375px;left: 0;width: 128%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat1Competencia1) >=0 && str_replace( ',', '.',$informar->Mat1Competencia1) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat1Competencia1) > 3 && str_replace( ',', '.',$informar->Mat1Competencia1) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat1Competencia1) > 7 && str_replace( ',', '.',$informar->Mat1Competencia1) <= 10)
                        III
                    @endif 
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 375px;left: 0;width: 140%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat1Competencia2) >=0 && str_replace( ',', '.',$informar->Mat1Competencia2) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat1Competencia2) > 3 && str_replace( ',', '.',$informar->Mat1Competencia2) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat1Competencia2) > 7 && str_replace( ',', '.',$informar->Mat1Competencia2) <= 10)
                        III
                    @endif 
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 375px;left: 0;width: 153%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat1Competencia3) >=0 && str_replace( ',', '.',$informar->Mat1Competencia3) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat1Competencia3) > 3 && str_replace( ',', '.',$informar->Mat1Competencia3) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat1Competencia3) > 7 && str_replace( ',', '.',$informar->Mat1Competencia3) <= 10)
                        III
                    @endif 
                <span>&nbsp;</span>
            </div>

            <!-- Competencia Materia 3  -->

            <div style="position: absolute;top: 405px;left: 0;width: 128%;">
                <span>{{ round($informar->Mat3Competencia1, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 405px;left: 0;width: 140%;">
                <span>{{ round($informar->Mat3Competencia2, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 405px;left: 0;width: 153%;">
                <span>{{ round($informar->Mat3Competencia3, 2) }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 435px;left: 0;width: 128%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat3Competencia1) >=0 && str_replace( ',', '.',$informar->Mat3Competencia1) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat3Competencia1) > 3 && str_replace( ',', '.',$informar->Mat3Competencia1) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat3Competencia1) > 7 && str_replace( ',', '.',$informar->Mat3Competencia1) <= 10)
                        III
                    @endif
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 435px;left: 0;width: 140%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat3Competencia2) >=0 && str_replace( ',', '.',$informar->Mat3Competencia2) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat3Competencia2) > 3 && str_replace( ',', '.',$informar->Mat3Competencia2) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat3Competencia2) > 7 && str_replace( ',', '.',$informar->Mat3Competencia2) <= 10)
                        III
                    @endif
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 435px;left: 0;width: 153%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat3Competencia3) >=0 && str_replace( ',', '.',$informar->Mat3Competencia3) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat3Competencia3) > 3 && str_replace( ',', '.',$informar->Mat3Competencia3) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat3Competencia3) > 7 && str_replace( ',', '.',$informar->Mat3Competencia3) <= 10)
                        III
                    @endif
                <span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 465px;left: 0;width: 128%;">
                <span>{{ round($informar->Mat4Competencia1, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 465px;left: 0;width: 140%;">
                <span>{{ round($informar->Mat4Competencia2, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 465px;left: 0;width: 153%;">
                <span>{{ round($informar->Mat4Competencia3, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 495px;left: 0;width: 128%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat4Competencia1) >=0 && str_replace( ',', '.',$informar->Mat4Competencia1) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat4Competencia1) > 3 && str_replace( ',', '.',$informar->Mat4Competencia1) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat4Competencia1) > 7 && str_replace( ',', '.',$informar->Mat4Competencia1) <= 10)
                        III
                    @endif
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 495px;left: 0;width: 140%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat4Competencia2) >=0 && str_replace( ',', '.',$informar->Mat4Competencia2) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat4Competencia2) > 3 && str_replace( ',', '.',$informar->Mat4Competencia2) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat4Competencia2) > 7 && str_replace( ',', '.',$informar->Mat4Competencia2) <= 10)
                        III
                    @endif
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 495px;left: 0;width: 153%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat4Competencia3) >=0 && str_replace( ',', '.',$informar->Mat4Competencia3) <= 3)
                        I 
                    @elseif(str_replace( ',', '.',$informar->Mat4Competencia3) > 3 && str_replace( ',', '.',$informar->Mat4Competencia3) <= 7)
                        II 
                     @elseif(str_replace( ',', '.',$informar->Mat4Competencia3) > 7 && str_replace( ',', '.',$informar->Mat4Competencia3) <= 10)
                        III
                    @endif
                <span>&nbsp;</span>
            </div>






            <!-- DATOS COMPONENTES -->

            <div style="position: absolute;top: 345px;left: 0;width: 166%;">
                <span>{{ round($informar->Mat1Componentes1, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 345px;left: 0;width: 176%;">
                <span>{{ round($informar->Mat1Componentes2, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 345px;left: 0;width: 184%;">
                <span>{{ round($informar->Mat1Componentes3, 2) }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 375px;left: 0;width: 166%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat1Componentes1) >=0 && str_replace( ',', '.',$informar->Mat1Componentes1) <= 2)
                        SB 
                    @elseif(str_replace( ',', '.',$informar->Mat1Componentes1) > 2 && str_replace( ',', '.',$informar->Mat1Componentes1) <= 4)
                        B
                    @elseif(str_replace( ',', '.',$informar->Mat1Componentes1) > 4 && str_replace( ',', '.',$informar->Mat1Componentes1) <= 6)
                        M
                    @elseif(str_replace( ',', '.',$informar->Mat1Componentes1) > 6 && str_replace( ',', '.',$informar->Mat1Componentes1) <= 8)
                        A 
                     @elseif(str_replace( ',', '.',$informar->Mat1Componentes1) > 8 && str_replace( ',', '.',$informar->Mat1Componentes1) <= 10)
                        SA
                    @endif
                <span>&nbsp;</span>
            </div>



            <div style="position: absolute;top: 375px;left: 0;width: 176%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat1Componentes2) >=0 && str_replace( ',', '.',$informar->Mat1Componentes2) <= 2)
                        SB 
                    @elseif(str_replace( ',', '.',$informar->Mat1Componentes2) > 2 && str_replace( ',', '.',$informar->Mat1Componentes2) <= 4)
                        B
                    @elseif(str_replace( ',', '.',$informar->Mat1Componentes2) > 4 && str_replace( ',', '.',$informar->Mat1Componentes2) <= 6)
                        M
                    @elseif(str_replace( ',', '.',$informar->Mat1Componentes2) > 6 && str_replace( ',', '.',$informar->Mat1Componentes2) <= 8)
                        A 
                     @elseif(str_replace( ',', '.',$informar->Mat1Componentes2) > 8 && str_replace( ',', '.',$informar->Mat1Componentes2) <= 10)
                        SA
                    @endif
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 375px;left: 0;width: 184%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat1Componentes3) >=0 && str_replace( ',', '.',$informar->Mat1Componentes3) <= 2)
                        SB 
                    @elseif(str_replace( ',', '.',$informar->Mat1Componentes3) > 2 && str_replace( ',', '.',$informar->Mat1Componentes3) <= 4)
                        B
                    @elseif(str_replace( ',', '.',$informar->Mat1Componentes3) > 4 && str_replace( ',', '.',$informar->Mat1Componentes3) <= 6)
                        M
                    @elseif(str_replace( ',', '.',$informar->Mat1Componentes3) > 6 && str_replace( ',', '.',$informar->Mat1Componentes3) <= 8)
                        A 
                     @elseif(str_replace( ',', '.',$informar->Mat1Componentes3) > 8 && str_replace( ',', '.',$informar->Mat1Componentes3) <= 10)
                        SA
                    @endif
                <span>&nbsp;</span>
            </div>

            <!--
            <div style="position: absolute;top: 407px;left: 0;width: 164%;">
                <span>{{ round($informar->Mat3Componentes1, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 407px;left: 0;width: 172%;">
                <span>{{ round($informar->Mat3Componentes2, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 407px;left: 0;width: 180%;">
                <span>{{ round($informar->Mat3Componentes3, 2) }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 437px;left: 0;width: 164%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat3Componentes1) >=0 && str_replace( ',', '.',$informar->Mat3Componentes1) <= 2)
                        SB 
                    @elseif(str_replace( ',', '.',$informar->Mat3Componentes1) > 2 && str_replace( ',', '.',$informar->Mat3Componentes1) <= 4)
                        B
                    @elseif(str_replace( ',', '.',$informar->Mat3Componentes1) > 4 && str_replace( ',', '.',$informar->Mat3Componentes1) <= 6)
                        M
                    @elseif(str_replace( ',', '.',$informar->Mat3Componentes1) > 6 && str_replace( ',', '.',$informar->Mat3Componentes1) <= 8)
                        A 
                     @elseif(str_replace( ',', '.',$informar->Mat3Componentes1) > 8 && str_replace( ',', '.',$informar->Mat3Componentes1) <= 10)
                        SA
                    @endif
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 437px;left: 0;width: 172%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat3Componentes2) >=0 && str_replace( ',', '.',$informar->Mat3Componentes2) <= 2)
                        SB 
                    @elseif(str_replace( ',', '.',$informar->Mat3Componentes2) > 2 && str_replace( ',', '.',$informar->Mat3Componentes2) <= 4)
                        B
                    @elseif(str_replace( ',', '.',$informar->Mat3Componentes2) > 4 && str_replace( ',', '.',$informar->Mat3Componentes2) <= 6)
                        M
                    @elseif(str_replace( ',', '.',$informar->Mat3Componentes2) > 6 && str_replace( ',', '.',$informar->Mat3Componentes2) <= 8)
                        A 
                     @elseif(str_replace( ',', '.',$informar->Mat3Componentes2) > 8 && str_replace( ',', '.',$informar->Mat3Componentes2) <= 10)
                        SA
                    @endif
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 437px;left: 0;width: 180%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat3Componentes3) >=0 && str_replace( ',', '.',$informar->Mat3Componentes3) <= 2)
                        SB 
                    @elseif(str_replace( ',', '.',$informar->Mat3Componentes3) > 2 && str_replace( ',', '.',$informar->Mat3Componentes3) <= 4)
                        B
                    @elseif(str_replace( ',', '.',$informar->Mat3Componentes3) > 4 && str_replace( ',', '.',$informar->Mat3Componentes3) <= 6)
                        M
                    @elseif(str_replace( ',', '.',$informar->Mat3Componentes3) > 6 && str_replace( ',', '.',$informar->Mat3Componentes3) <= 8)
                        A 
                     @elseif(str_replace( ',', '.',$informar->Mat3Componentes3) > 8 && str_replace( ',', '.',$informar->Mat3Componentes3) <= 10)
                        SA
                    @endif
                <span>&nbsp;</span>
            </div>

            -->

            
            <div style="position: absolute;top: 465px;left: 0;width: 166%;">
                <span>{{ round($informar->Mat4Componentes1, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 465px;left: 0;width: 176%;">
                <span>{{ round($informar->Mat4Componentes2, 2) }}<span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 465px;left: 0;width: 184%;">
                <span>{{ round($informar->Mat4Componentes3, 2) }}<span>&nbsp;</span>
            </div>

            <div style="position: absolute;top: 495px;left: 0;width: 166%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat4Componentes1) >=0 && str_replace( ',', '.',$informar->Mat4Componentes1) <= 2)
                        SB 
                    @elseif(str_replace( ',', '.',$informar->Mat4Componentes1) > 2 && str_replace( ',', '.',$informar->Mat4Componentes1) <= 4)
                        B
                    @elseif(str_replace( ',', '.',$informar->Mat4Componentes1) > 4 && str_replace( ',', '.',$informar->Mat4Componentes1) <= 6)
                        M
                    @elseif(str_replace( ',', '.',$informar->Mat4Componentes1) > 6 && str_replace( ',', '.',$informar->Mat4Componentes1) <= 8)
                        A 
                     @elseif(str_replace( ',', '.',$informar->Mat4Componentes1) > 8 && str_replace( ',', '.',$informar->Mat4Componentes1) <= 10)
                        SA
                    @endif
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 495px;left: 0;width: 176%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat4Componentes2) >=0 && str_replace( ',', '.',$informar->Mat4Componentes2) <= 2)
                        SB 
                    @elseif(str_replace( ',', '.',$informar->Mat4Componentes2) > 2 && str_replace( ',', '.',$informar->Mat4Componentes2) <= 4)
                        B
                    @elseif(str_replace( ',', '.',$informar->Mat4Componentes2) > 4 && str_replace( ',', '.',$informar->Mat4Componentes2) <= 6)
                        M
                    @elseif(str_replace( ',', '.',$informar->Mat4Componentes2) > 6 && str_replace( ',', '.',$informar->Mat4Componentes2) <= 8)
                        A 
                     @elseif(str_replace( ',', '.',$informar->Mat4Componentes2) > 8 && str_replace( ',', '.',$informar->Mat4Componentes2) <= 10)
                        SA
                    @endif
                <span>&nbsp;</span>
            </div>
            <div style="position: absolute;top: 495px;left: 0;width: 184%;">
                <span>
                    @if( str_replace( ',', '.',$informar->Mat4Componentes3) >=0 && str_replace( ',', '.',$informar->Mat4Componentes3) <= 2)
                        SB 
                    @elseif(str_replace( ',', '.',$informar->Mat4Componentes3) > 2 && str_replace( ',', '.',$informar->Mat4Componentes3) <= 4)
                        B
                    @elseif(str_replace( ',', '.',$informar->Mat4Componentes3) > 4 && str_replace( ',', '.',$informar->Mat4Componentes3) <= 6)
                        M
                    @elseif(str_replace( ',', '.',$informar->Mat4Componentes3) > 6 && str_replace( ',', '.',$informar->Mat4Componentes3) <= 8)
                        A 
                     @elseif(str_replace( ',', '.',$informar->Mat4Componentes3) > 8 && str_replace( ',', '.',$informar->Mat4Componentes3) <= 10)
                        SA
                    @endif
                <span>&nbsp;</span>
            </div>

        </div>  
    </body>
</html>