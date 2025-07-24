<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReportType;
use Illuminate\Support\Facades\Storage;
use App\Models\Type;
use Pdf;

class ReportsT extends Controller
{
    public function index(){
        $reports = ReportType::all();
        return view('content.pages.reports-T', ['reports' => $reports]);
    }

    public function create(){
    // Obtener tipos con datos agregados
    $types = Type::withCount(['materials as total_materials' => function($q) {
                $q->where('active', true);
            }])
            ->withSum('materials as total_stock', 'stock')
            ->get();

    // Agregar datos personalizados manualmente
    foreach ($types as $type) {
        // Última fecha de ingreso del material de ese tipo
        $type->last_ingreso = $type->materials()
                                  ->where('active', true)
                                  ->max('fecha_ing');

        // Cantidad de proveedores únicos para ese tipo
        $type->unique_suppliers_count = $type->materials()
                                          ->where('active', true)
                                          ->distinct('supplier_id')
                                          ->count('supplier_id');
    }

    $date = now()->format('Y-m-d_H-i-s');
    $pdf = Pdf::loadView('pdf.types', compact('types'));
    Storage::put('public/pdf/'.$date.".pdf", $pdf->output());

    ReportType::create(['url' => $date.".pdf"]);

    return redirect()->route('pages-reports-T');
}


    public function delete($id){
        $report = ReportType::findOrFail($id);
        Storage::delete('public/pdf/'.$report->url);
        $report->delete();
        return redirect()->route('pages-reports-T');
    }

    public function download($fileName){
        $filePath = storage_path('app/public/pdf/' . $fileName);
        if (file_exists($filePath)) {
            return response()->download($filePath, $fileName);
        }
        return redirect()->back()->with('error', 'El archivo de pdf no se encuentra disponible.');
    }
}
