<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReportMaterial;
use App\Models\Material;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportsM extends Controller
{
    public function index()
    {
        $reports = ReportMaterial::orderBy('created_at', 'desc')->get();
        return view('content.pages.reports-M', compact('reports'));
    }

    public function create()
    {
        $materials = Material::with(['type', 'supplier'])->get(); // Carga relaciones útiles

        $date = now()->format('Y-m-d_H-i-s');
        $fileName = $date . '.pdf';

        $pdf = Pdf::loadView('pdf.materials', compact('materials'))
                  ->setPaper('A4', 'landscape'); // Puedes cambiar esto según necesidad

        Storage::put("public/pdf/{$fileName}", $pdf->output());

        ReportMaterial::create([
            'url' => $fileName
        ]);

        return redirect()->route('pages-reports-M')->with('success', 'Reporte generado correctamente.');
    }

    public function delete($id)
    {
        $report = ReportMaterial::findOrFail($id);
        Storage::delete("public/pdf/{$report->url}");
        $report->delete();

        return redirect()->route('pages-reports-M')->with('success', 'Reporte eliminado.');
    }

    public function download($fileName)
    {
        $filePath = storage_path("app/public/pdf/{$fileName}");

        if (file_exists($filePath)) {
            return response()->download($filePath);
        }

        return redirect()->back()->with('error', 'El archivo no existe.');
    }
}
