@extends('layout')

@section('titulo', 'Vehiculos')

@section('contenido')
    <div class="container">
        <form action="{{route('vehiculo.index')}}" method="GET">
            <div class="form-group row">
                <label for="buscar" class="col-sm-1 col-form-label text-white" style="margin-left: 30px">Buscar:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="buscar" name="buscar" placeholder="placa y/o marca" value="{{$buscar}}">
                </div>
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>
    </div>

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
