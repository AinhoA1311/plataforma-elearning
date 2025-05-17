<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'nivel',
    ];

    // ✅ Relación: un curso tiene muchos materiales
    public function materiales()
    {
        return $this->hasMany(\App\Models\Material::class);
    }
}

