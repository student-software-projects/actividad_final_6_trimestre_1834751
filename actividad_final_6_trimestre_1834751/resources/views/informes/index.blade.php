@extends('layout')

@section('titulo', 'Informe')

@section('contenido')
    <div class="row" style="justify-content: center">
        <div class="card text-white bg-transparent p-4" style="width:700px; border:solid;">
            <div class="card-body">
                <h5 class="card-title mb-5">Informe</h5>
                <form action="{{route('informes')}}" method="GET">
                    <div class="form-group row">
                        <label for="buscar" class="col-sm-4 col-form-label">Buscar:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="buscar" name="buscar" value="{{$buscar}}">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </form>
                @foreach($vehiculos as $vehiculo)
                    @if($vehiculo->id != null)
                        <div class="row mt-4">
                            <div class="col-xl">
                                <strong style="margin-right: 20px">PLACA:</strong><span>{{$vehiculo->placa}}</span>
                            </div>
                            <div class="col-xl">
                                <strong style="margin-right: 20px">MARCA:</strong><span>{{$vehiculo->marca}}</span>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-xl">
                                <strong style="margin-right: 20px">Conductor:</strong><span>{{$vehiculo->conductor_id}}</span>
                            </div>
                            <div class="col-xl">
                                <strong style="margin-right: 20px">Propietario:</strong><span>{{$vehiculo->propietario_id}}</span>
                            </div>
                        </div>

                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
