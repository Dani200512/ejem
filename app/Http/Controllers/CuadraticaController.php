<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuadraticaController extends Controller
{

    public function create3()
    {
        return view('cuadratica');
    }

    public function cuadratica(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $c = $request->c;

        if ($a == 0) {
            return "El coeficiente 'a' debe ser diferente de cero para una ecuación cuadrática.";
        }

        $discriminante = pow($b, 2) - (4 * $a * $c);

        if ($discriminante < 0) {
            return "La ecuación cuadrática no tiene raíces reales.";
        }

        $raiz1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $raiz2 = (-$b - sqrt($discriminante)) / (2 * $a);

        return "Las raíces de la ecuación cuadrática $a*x^2 + $b*x + $c = 0 son: x1 = $raiz1 y x2 = $raiz2";
    }
}



