<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformeController extends Controller
{
    public function index(Request $request){
        $buscar = trim($request->get('buscar'));
        $conductor = Persona::join('vehiculos', 'personas.id', '=', 'vehiculos.conductor_id')
        ->select('*')
        ->where('placa', '=', $buscar)
        ->get()
        ->first();
        $propietario = Persona::join('vehiculos', 'personas.id', '=', 'vehiculos.propietario_id')
            ->select('*')
            ->where('placa', '=', $buscar)
            ->get()
            ->first();
        return view('informes.index', compact('conductor', 'propietario', 'buscar'));
    }


}
