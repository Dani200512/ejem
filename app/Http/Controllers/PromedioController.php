<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromedioController extends Controller
{

    public function create1(){

        return view('Promedio');

    }

    public function store1(Request $request){
        $num1=$request->num1;
        $num2=$request->num2;
        $num3=$request->num3;
        $resultado=$request->resultado;
        // Calcular el promedio
        $promedio = ($num1 + $num2 + $num3) / 3;

        // Retornar el resultado o realizar la acción que desees
        return "el promedio de las 3 notas es: $promedio";
}
}
