<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmigosController extends Controller
{

    public function create2(){

        return view('amigos');

    }

    public function esPrimo($num) {
        if ($num < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }

        return true;
    }

    public function store2(Request $request)
{
    $num1 = $request->num1;
    $num2 = $request->num2;

    if ($num1 <= 0 || $num2 <= 0) {
        return "Por favor, ingresa números enteros positivos.";
    }

    $p = 3 * pow(2, $num1 - 1) - 1;
    $q = 3 * pow(2, $num1) - 1;
    $r = 9 * pow(2, (2 * $num1) - 1) - 1;

    if (!$this->esPrimo($p) || !$this->esPrimo($q) || !$this->esPrimo($r)) {
        return "Los números proporcionados no generan números amigos.";
    }

    $amigo1 = 2 * $p * $q;
    $amigo2 = 2 * $r;

    if ($amigo1 == $num2 || $amigo2 == $num2) {
        return "Los números $num1 y $num2 son números amigos.";
    } else {
        return "Los números $num1 y $num2 no son números amigos.";
    }
}

}

