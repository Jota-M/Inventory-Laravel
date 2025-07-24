<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Material,Supplier,Type,Backup,ReportMaterial,ReportSupplier,ReportType};
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomePage extends Controller
{
public function index()
{
    $user = Auth::user();
    $roleifexist = DB::table('model_has_roles')->where('model_id', $user->id)->first();

    if (!$roleifexist) {
        DB::table('model_has_roles')->insert([
            'role_id' => 2,
            'model_type' => 'App\Models\User',
            'model_id' => $user->id
        ]);
    }

    // Conteos básicos
    $n_proveedores = Supplier::where('active', true)->count();
    $n_types = Type::where('active', true)->count();
    $n_materiales = Material::where('active', true)->count();
    $n_backups = Backup::where('status', 'done')->count();
    $n_reportsM = ReportMaterial::count();
    $n_reportsS = ReportSupplier::count();
    $n_reportsT = ReportType::count();
    $n_reports = $n_reportsM + $n_reportsS + $n_reportsT;

    // Top 5 materiales con menor stock (activos)
    $lowStockMaterials = Material::where('active', true)
        ->orderBy('stock', 'asc')
        ->take(5)
        ->get(['name', 'stock', 'code']);

    // Proveedores con más materiales activos (por cantidad de materiales)
    $topSuppliers = Supplier::where('active', true)
        ->withCount(['materials as active_materials_count' => function ($q) {
            $q->where('active', true);
        }])
        ->orderByDesc('active_materials_count')
        ->take(5)
        ->get(['id', 'name']);

    // Tipos con mayor stock total
    $topTypes = Type::where('active', true)
        ->withSum(['materials as total_stock' => function ($q) {
            $q->where('active', true);
        }], 'stock')
        ->orderByDesc('total_stock')
        ->take(5)
        ->get(['id', 'name']);

    // Últimos 5 movimientos de salida de materiales (si tienes esa tabla)
    // Suponiendo que tengas una tabla 'material_outputs' o 'material_movements'
    // Ajustar según tu modelo real.
    $recentOutputs = DB::table('material_outputs')
        ->join('materials', 'material_outputs.material_id', '=', 'materials.id')
        ->select('materials.name', 'material_outputs.quantity', 'material_outputs.created_at')
        ->orderByDesc('material_outputs.created_at')
        ->take(5)
        ->get();

    return view('content.pages.pages-home', compact(
        'n_proveedores', 'n_types', 'n_materiales', 'n_backups', 'n_reports',
        'lowStockMaterials', 'topSuppliers', 'topTypes', 'recentOutputs'
    ));
}


}
