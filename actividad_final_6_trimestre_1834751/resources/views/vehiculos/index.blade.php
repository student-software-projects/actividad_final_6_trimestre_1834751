@extends('layout')

@section('titulo', 'Vehiculos')

@section('contenido')
    <div class="row" style="justify-content: center">
        <div class="card text-white p-4" style="width:600px; border:solid; opacity: 0.7; background: black;">
            <a class="btn btn-warning" style="width:200px" href="{{route('vehiculo.crear')}}">Agregar nuevo registro</a>
            @if(session('mensaje'))
                <div class="alert alert-warning mt-4" role="alert">
                    {{session('mensaje')}}
                </div>
            @endif
            <div class="card-body">
                <h5 class="card-title">Vehiculos</h5>
                <table class="table table-hover">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Placas </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($vehiculos as $vehiculo)
                        <tr>
                            <td>
                                <a class="btn btn-block text-white" href="{{route('vehiculo.detalle', $vehiculo->id)}}">{{$vehiculo->placa}}</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
