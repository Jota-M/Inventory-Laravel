<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialOutput extends Model
{
    use HasFactory;

    protected $fillable = [
        'material_id',
        'quantity',
        'date',
        'delivered_to',
        'responsible',
        'reason',
    ];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
