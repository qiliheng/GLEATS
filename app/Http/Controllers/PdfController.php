<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function downloadPdf()
    {
        // Fetch data from the database
        $data = DB::table('test')->get();

        // Check if there's any data
        if ($data->isEmpty()) {
            return response()->json(['message' => 'No data available to generate PDF'], 404);
        }

        // Load the view and pass data to it
        $pdf = Pdf::loadView('pdf_view', ['data' => $data]);

        // Return the PDF file as a download
        return $pdf->download('database.pdf');
    }
}
