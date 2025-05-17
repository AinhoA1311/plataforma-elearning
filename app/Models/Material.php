<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'curso_id',
        'archivo'
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
