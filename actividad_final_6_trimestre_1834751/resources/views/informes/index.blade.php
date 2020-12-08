@extends('layout')

@section('titulo', 'Informe')

@section('contenido')
    <div class="row" style="justify-content: center">
        <div class="card text-white p-4" style="width:700px; border:solid; opacity: 0.7; background: black;">
            <div class="card-body">
                <h5 class="card-title mb-5">Informe</h5>
                <form action="{{route('informes')}}" method="GET">
                    <div class="form-group row">
                        <label for="buscar" class="col-sm-4 col-form-label">Buscar:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="buscar" name="buscar" placeholder="Numero de placa..." value="{{$buscar}}">
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </form>
                @if($conductor)
                    <h4 style="margin-top: 20px; text-align: center;">Informe Correspondiente a la placa: {{$conductor->placa}}</h4>
                    <div class="row mt-4">
                        <div class="col-xl">
                            <strong style="margin-right: 20px">PLACA:</strong><span>{{$conductor->placa}}</span>
                        </div>
                        <div class="col-xl">
                            <strong style="margin-right: 20px">MARCA:</strong><span>{{$conductor->marca}}</span>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-xl">
                            <strong style="margin-right: 20px">CONDUCTOR:</strong><span>{{$conductor->primer_nombre}} {{$conductor->segundo_nombre}} {{$conductor->apellidos}}</span>
                        </div>
                        <div class="col-xl">
                            <strong style="margin-right: 20px">PROPIETARIO:</strong><span>{{$propietario->primer_nombre}} {{$propietario->segundo_nombre}} {{$propietario->apellidos}}</span>
                        </div>
                    </div>
                @elseif($buscar != '')
                    <p style="margin-top: 20px">Placa no registrada en la base de datos.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
