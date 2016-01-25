<html lang="en">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Example 2</title>
        </head>
        <body>
        <img src="imagenes/evaluarte-logo.png" style="width:200px"/>

          <h1>INVOICE {{ $invoice }}</h1>
          <div class="date">Date of Invoice: {{ $informar->codigo_simulacro }}</div>

        <table style="border: 1px solid #000;">
        <thead style="border: 1px solid #000;">
        <tr style="border: 1px solid #000;">
        <th style="border: 1px solid #000;">Total: {{$informar->proTotal}}</th>
        <th style="border: 1px solid #000;">Materia 1: {{$informar->Materia1}}</th>
        <th style="border: 1px solid #000;">Promedio materia 1: {{$informar->proMat1}}</th>
        </tr>
        <thead>
        <tbody>
</tbody></table> 
</body>
</html>