<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use DateTime;
use Dompdf\Adapter\PDFLib;
use Illuminate\Http\Request;
use PDF; // Importa la clase PDF
class reporte_pdf_Controller extends Controller
{



    public function generarPdf(Request $request)
    {
        $request->validate([
            'fecha_ini' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        $fecha_ini = $request->input('fecha_ini');
        $fecha_fin = $request->input('fecha_fin');


        // Obtener datos desde Eloquent
        $datos = Ticket::whereBetween('fecha_registro',[$fecha_ini,$fecha_fin])
        ->join('users','tickets.id_personal','=','users.id')
        ->where('estatus','Cerrado')->get();

        //Convertir a mayusculas antes de mandar al pdf
        foreach ($datos as $dato){
            $dato->description = mb_strtoupper($dato->description);
        }


        $fecha_ini_obj = new DateTime($fecha_ini);
        $fecha_fin_obj = new DateTime($fecha_fin);

        // Formatear las fechas
        $fecha_inicial = $fecha_ini_obj->format('d/m/Y');
        $fecha_final = $fecha_fin_obj->format('d/m/Y');
        // Cargar la vista y pasarle los datos
        $pdf = FacadePdf::loadView('pdf.pdfreporte', compact('datos','fecha_inicial','fecha_final'));

        // Devolver el PDF como respuesta
        return $pdf->download('Informe de Actividades.pdf');
    }


}
