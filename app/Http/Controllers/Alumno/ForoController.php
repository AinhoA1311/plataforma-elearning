<?php

namespace App\Http\Controllers\Alumno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForoController extends Controller
{
    public function index()
    {
        $temas = [
            [
                'titulo' => '¿Qué opináis de Laravel?',
                'comentarios' => [
                    ['autor' => 'Ainhoa', 'texto' => 'Me costó al principio pero ahora me encanta. Mucho más organizado que otros frameworks.'],
                    ['autor' => 'Alumno2', 'texto' => 'Totalmente de acuerdo, los recursos y el sistema de rutas lo hacen muy cómodo.']
                ]
            ],
            [
                'titulo' => '¿Material que recomendáis para repasar?',
                'comentarios' => [
                    ['autor' => 'Alumno3', 'texto' => 'Yo estoy usando Laracasts y me está ayudando mucho.'],
                    ['autor' => 'Alumno4', 'texto' => 'También hay buenos vídeos en YouTube para MySQL.']
                ]
            ]
        ];

        $mensajes = session('mensajes', []);
        return view('alumno.foro.index', compact('temas', 'mensajes'));
    }

    public function publicar(Request $request)
    {
        $mensaje = $request->input('mensaje');

        $mensajes = session('mensajes', []);
        $mensajes[] = ['autor' => 'Tú', 'texto' => $mensaje];

        session(['mensajes' => $mensajes]);
        return redirect()->route('alumno.foro');
    }
}



