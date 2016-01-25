<?php namespace GestorImagenes\Http\Controllers;

use GestorImagenes\Http\Requests;
use GestorImagenes\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use GestorImagenes\Http\Requests\MostrarInformesRequest;

use GestorImagenes\Informe;

class PdfController extends Controller {


	public function getIndex($id)
	{
        //$informes = Informe::where('codigo_simulacro', $id)->first();
        //return $user->email;

        //return view('pdf.invoice', ['fotos' => $fotos, 'id' => $id]);

        return view('pdf.invoice');

        /*
        $usuario = Auth::user();
        $alumnos= \DB::table('albumes')->get();
        $pdf = \App::make('dompdf.wrapper');

        $html='
        <html lang="en">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <title>Example 2</title>
        </head>
        <body>
        <img src="imagenes/evaluarte-logo.png" style="width:200px"/>
        <h1>Simulacro Saber</h1>
        <table style="border: 1px solid #000;">
        <thead style="border: 1px solid #000;">
        <tr style="border: 1px solid #000;">
        <th style="border: 1px solid #000;">Nombre </th>
        </tr>
        <thead>
        <tbody>';
        $filas='';

        foreach ($alumnos as $alumno)
        {
        $filas=$filas.'<tr><td>'.$alumno->nombre.'</td></tr>';
        }
        $html=$html.$filas.'</tbody></table> </body></html>';
        $pdf->loadHTML($html);
        return $pdf->stream();
        
        */

       // $pdf = \PDF::loadView('pdf.invoice', compact('order'))->setPaper('a4')->setOrientation('portrait');
       // return $pdf->stream('invoice.pdf');

	}



    
}
