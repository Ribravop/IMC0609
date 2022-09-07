<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imc;

class ImcController extends Controller
{

    public function index() {
        return view('imc');
    }

    public function calculo() {
        $peso = floatval($_GET["peso"]);
        $altura = floatval($_GET["altura"]);

        $resultado = Imc::calcular($peso, $altura);

        return view('resultado', ['valor' => number_format($resultado, 2)]);
    }
}
