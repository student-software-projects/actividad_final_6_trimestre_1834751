@extends('layout')

@section('titulo', 'Editar')

@section('contenido')
    <div class="row" style="justify-content: center">
        <div class="card text-white bg-transparent p-4" style="width:700px; border:solid;">
            <div class="card-body">
                <h5 class="card-title mb-5">Actualizar</h5>
                <form action="{{route('vehiculo.actualizar', $vehiculo->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="placa" class="col-sm-4 col-form-label">Placa:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="placa" name="placa" value="{{$vehiculo->placa}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="color" class="col-sm-4 col-form-label">Color:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="color" name="color" value="{{$vehiculo->color}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="marca" class="col-sm-4 col-form-label">Marca:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="marca" name="marca" value="{{$vehiculo->marca}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tipo_vehiculo" class="col-sm-4 col-form-label">Tipo de vehiculo:</label>
                        <div class="col-sm-8">
                            <select name="tipo_vehiculo" id="tipo_vehiculo" class="form-control">
                                <option value="">Seleccionar...</option>
                                <option value="1">Particular</option>
                                <option value="2">Publico</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="conductor_id" class="col-sm-4 col-form-label">Conductor:</label>
                        <div class="col-sm-8">
                            <select name="conductor_id" id="conductor_id" class="form-control">
                                <option value="">Seleccionar...</option>
                                @foreach($personas as $persona)
                                    <option value="{{$persona->id}}">{{$persona->primer_nombre}} {{$persona->apellidos}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-5">
                        <label for="propietario_id" class="col-sm-4 col-form-label">Propietario:</label>
                        <div class="col-sm-8">
                            <select name="propietario_id" id="propietario_id" class="form-control">
                                <option value="">Seleccionar...</option>
                                @foreach($personas as $persona)
                                    <option value="{{$persona->id}}">{{$persona->primer_nombre}} {{$persona->apellidos}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                    <a class="btn btn-info" href="{{route('vehiculo.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("tipo_vehiculo").selectedIndex = {{$vehiculo->tipo_vehiculo}};
        document.getElementById("conductor_id").selectedIndex = {{$vehiculo->conductor_id}};
        document.getElementById("propietario_id").selectedIndex = {{$vehiculo->propietario_id}};
    </script>
@endsection
