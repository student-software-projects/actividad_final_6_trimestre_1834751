@extends('layout')

@section('titulo', 'Crear')

@section('contenido')
    <div class="row" style="justify-content: center">
        <div class="card text-white p-4" style="width:700px; border:solid; opacity: 0.7; background: black;">
            <div class="card-body">
                <h5 class="card-title mb-5">Crear</h5>
                <form action="{{route('persona.guardar')}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label for="primer_nombre" class="col-sm-4 col-form-label">Primer nombre:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="segundo_nombre" class="col-sm-4 col-form-label">Segundo nombre:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidos" class="col-sm-4 col-form-label">Apellidos:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="apellidos" name="apellidos">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numero_cedula" class="col-sm-4 col-form-label">Numero de cedula:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="numero_cedula" name="numero_cedula">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccion" class="col-sm-4 col-form-label">Direccion:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="direccion" name="direccion">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-4 col-form-label">Telefono:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="telefono" name="telefono">
                        </div>
                    </div>
                    <div class="form-group row mb-5">
                        <label for="ciudad" class="col-sm-4 col-form-label">Ciudad:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="ciudad" name="ciudad">
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <a class="btn btn-info" href="{{route('persona.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
