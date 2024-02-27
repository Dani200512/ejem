<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function create(){

        return view('formulario');

    }

    public function store(Request $request){

        $num1=$request->num1;
        if(!is_numeric($num1))

                return false;

            for ($i = 2; $i < $num1; $i++) {

                if (($num1 % $i) == 0) {

                    // No es primo :(
                    return "no primo";
                }

            }
            // Es primo :)
            return "es primo";
    }

}


