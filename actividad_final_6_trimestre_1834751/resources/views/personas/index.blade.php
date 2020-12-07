@extends('layout')

@section('titulo', 'Personas')

@section('contenido')
    <div class="row" style="justify-content: center">
        <div class="card text-white bg-transparent p-4" style="width:600px; border:solid;">
            <a class="btn btn-warning" style="width:200px" href="{{route('persona.crear')}}">Agregar nuevo registro</a>
            <div class="card-body">
                <h5 class="card-title">Conductores y/o Propietarios</h5>
                <table class="table table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Nombre de los conductores/propietarios </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>
                                <a class="btn btn-block text-white" href="{{route('persona.detalle', $persona->id)}}">{{$persona->primer_nombre}} {{$persona->segundo_nombre}} {{$persona->apellidos}}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
