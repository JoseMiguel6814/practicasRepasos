<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerCalculadora extends Controller
{
    public function index()
    {
        return view('calculadora'); // Asegúrate de que esta vista existe
    }

   
    public function convertir(Request $request)
    {
        $valor = $request->input('valor');
        $unidad = $request->input('unidad');
        $unidadDestino = $request->input('unidad_destino');
        $resultado = '';

       
        $valorEnGB = 0;

        switch ($unidad) {
            case 'MB':
                $valorEnGB = $valor / 1024;
                break;

            case 'GB':
                $valorEnGB = $valor; 
                break;

            case 'TB':
                $valorEnGB = $valor * 1024;
                break;

           
        }

        // Convertir el valor en GB a la unidad destino
        switch ($unidadDestino) {
            case 'MB':
                $resultado = "{$valor} {$unidad} es igual a " . round($valorEnGB * 1024) . " MB.";
                break;

            case 'GB':
                $resultado = "{$valor} {$unidad} es igual a " . round($valorEnGB) . " GB.";
                break;

            case 'TB':
                $resultado = "{$valor} {$unidad} es igual a " . round($valorEnGB / 1024) . " TB.";
                break;

           
        }

        return redirect()->route('Vcalculadora')->with('resultado', $resultado);
    }
}
