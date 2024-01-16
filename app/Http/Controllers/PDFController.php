<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class PDFController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function generatePDF()
    {

        $pdf = Pdf::loadView('marathi');

        $pdf->SetProtection(['copy', 'print'], '', 'pass');

        return $pdf->stream('sample.pdf', array("Attachment" => false ));
    }
}
