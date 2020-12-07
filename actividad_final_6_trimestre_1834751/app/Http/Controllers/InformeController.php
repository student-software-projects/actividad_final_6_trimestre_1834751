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
        $vehiculos = Vehiculo::select('*')->where('placa', '=', $buscar)->get();
        return view('informes.index', compact('vehiculos', 'buscar'));
    }


}
