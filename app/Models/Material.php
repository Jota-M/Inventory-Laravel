<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;


public function reportMaterials()
{
    return $this->hasMany(ReportMaterial::class);
}
public function type()
{
    return $this->belongsTo(Type::class, 'type_id');
}

public function supplier()
{
    return $this->belongsTo(Supplier::class, 'supplier_id');
}

}
