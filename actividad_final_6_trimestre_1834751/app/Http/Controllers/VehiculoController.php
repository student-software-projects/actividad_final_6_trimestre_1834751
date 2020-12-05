<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index(){
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function crear(){
        $personas = Persona::all();
        return view('vehiculos.crear', compact('personas'));
    }

    public function guardar(Request $request){
        $vehiculo = Vehiculo::create($request->all());
        return redirect()->route('vehiculo.index');
    }

    public function detalle($id){
        $vehiculo = Vehiculo::find($id);
        return view('vehiculos.detalle', compact('vehiculo'));
    }

    public function eliminar($id){
        $vehiculo = Vehiculo::find($id)->delete();
        return redirect()->route('vehiculo.index');
    }

    public function editar($id){
        $personas = Persona::all();
        $vehiculo = Vehiculo::find($id);
        return view('vehiculos.editar', compact('vehiculo', 'personas'));
    }

    public function actualizar(Request $request, $id){
        $vehiculo = Vehiculo::find($id)->update($request->all());
        return redirect()->route('vehiculo.detalle', $id);
    }
}
