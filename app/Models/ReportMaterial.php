<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportMaterial extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_id',
        'fecha',
        'cantidad',
        'tipo', // 'entrada' o 'salida'
        'responsable',
        'url', // AQUI se habilita la asignación masiva
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
