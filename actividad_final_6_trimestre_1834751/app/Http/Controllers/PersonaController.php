<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index(){
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function crear(){
        return view('personas.crear');
    }

    public function guardar(Request $request){
        $persona = Persona::create($request->all());
        return redirect()->route('persona.index')->with([
            'mensaje' => 'Se ha creado el registro de forma correcta'
        ]);
    }

    public function detalle($id){
        $persona = Persona::find($id);
        return view('personas.detalle', compact('persona'));
    }

    public function eliminar($id){
        $persona = Persona::find($id)->delete();
        return redirect()->route('persona.index')->with([
            'mensaje' => 'Se ha eliminado el registro de forma correcta'
        ]);
    }

    public function editar($id){
        $persona = Persona::find($id);
        return view('personas.editar', compact('persona'));
    }

    public function actualizar(Request $request, $id){
        $persona = Persona::find($id)->update($request->all());
        return redirect()->route('persona.detalle', $id);
    }
}
