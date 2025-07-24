<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReportSupplier;
use Illuminate\Support\Facades\Storage;
use App\Models\Supplier;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportsS extends Controller
{
    public function index(){
        $reports = ReportSupplier::all();
        return view('content.pages.reports-S', ['reports' => $reports]);
    }

    public function create(){
        $suppliers = Supplier::all();        

        $date = now()->format('Y-m-d_H-i-s');
        $pdf = Pdf::loadView('pdf.suppliers', compact('suppliers'));

        Storage::put('public/pdf/'.$date.".pdf", $pdf->output());

        ReportSupplier::create([
            'url' => $date.".pdf"
        ]);

        return redirect()->route('pages-reports-S');
    }

    public function delete($id){
        $report = ReportSupplier::findOrFail($id);
        Storage::delete('public/pdf/' . $report->url);
        $report->delete();
        return redirect()->route('pages-reports-S');
    }

    public function download($fileName){
        $filePath = storage_path('app/public/pdf/' . $fileName);

        if (file_exists($filePath)) {
            return response()->download($filePath, $fileName);
        } else {
            return redirect()->back()->with('error', 'El archivo de pdf no se encuentra disponible.');
        }
    }
}
