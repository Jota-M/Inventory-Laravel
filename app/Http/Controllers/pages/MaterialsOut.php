<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaterialOutput;
use App\Models\Material;
use App\Models\Supplier;
use App\Models\Type;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MaterialsOut extends Controller
{
    public function index()
    {
        $outputs = MaterialOutput::with('material')->latest()->paginate(10);
        return view('content.pages.material_outputs.index', compact('outputs'));
    }

    // Formulario para nueva salida
    public function create()
    {
        $materials = Material::all();
        return view('content.pages.material_outputs.create', compact('materials'));
    }

    // Guardar una nueva salida
    public function store(Request $request)
    {
        $request->validate([
            'material_id' => 'required|exists:materials,id',
            'quantity' => 'required|integer|min:1',
            'date' => 'required|date',
            'delivered_to' => 'nullable|string|max:255',
            'responsible' => 'nullable|string|max:255',
            'reason' => 'nullable|string|max:1000',
        ]);

        $material = Material::findOrFail($request->material_id);

        if ($request->quantity > $material->stock) {
            return back()->withErrors(['quantity' => 'La cantidad excede el stock disponible.']);
        }

        // Registrar salida
        MaterialOutput::create([
            'material_id' => $request->material_id,
            'quantity' => $request->quantity,
            'date' => $request->date,
            'delivered_to' => $request->delivered_to,
            'responsible' => $request->responsible,
            'reason' => $request->reason,
        ]);

        // Actualizar stock del material
        $material->stock -= $request->quantity;
        $material->save();

        return redirect()->route('pages-material-outputs')->with('success', 'Salida registrada correctamente.');
    }

    // Lista sin paginación (opcional)
    public function list()
    {
        $outputs = MaterialOutput::with('material')->get();
        return response()->json($outputs);
    }
}