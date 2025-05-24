<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Excel;

class ReportExportController extends Controller
{
    public function export($type)
    {
        // Get your report data here
        $data = [
            'documents' => [
                // Your document data
            ]
        ];

        switch ($type) {
            case 'pdf':
                $pdf = PDF::loadView('reports.export.pdf', $data);
                return $pdf->download('report.pdf');
            
            case 'excel':
                return Excel::download(new \App\Exports\ReportsExport($data), 'report.xlsx');
            
            case 'csv':
                return Excel::download(new \App\Exports\ReportsExport($data), 'report.csv');
            
            default:
                return back()->with('error', 'Invalid export type');
        }
    }
}
