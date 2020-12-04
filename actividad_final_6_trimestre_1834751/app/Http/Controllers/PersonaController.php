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
        $persona = Persona::all();
        return view('personas.crear', compact('persona'));
    }

    public function guardar(Request $request){
        $persona = Persona::create($request->all());
        return redirect()->route('persona.index');
    }

    public function detalle($id){
        $persona = Persona::find($id);
        return view('personas.detalle', compact('persona'));
    }

    public function eliminar($id){
        $persona = Persona::find($id)->delete();
        return redirect()->route('persona.index');
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
