<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Material;

class MaterialesTableSeeder extends Seeder
{
    public function run()
    {
        Material::create([
            'titulo' => 'Ejemplo de material',
            'archivo' => 'ejemplo.pdf', // asegúrate de que exista o cámbialo a algo válido
            'curso_id' => 1 // este ID debe existir, asegúrate de tener al menos un curso creado
        ]);
    }
}

