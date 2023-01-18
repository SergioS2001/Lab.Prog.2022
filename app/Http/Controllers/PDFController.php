<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Store - Fatura',
            'data' => date('m/d/Y')
        ];

        $pdf = Pdf::loadView('myPDF', $data);

        return $pdf->download('myPDF.pdf');

        
    }
    
}
