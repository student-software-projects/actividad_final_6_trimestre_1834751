@extends('layout')

@section('titulo', 'Editar')

@section('contenido')
    <div class="row" style="justify-content: center">
        <div class="card text-white bg-dark p-4" style="width:700px">
            <div class="card-body">
                <h5 class="card-title mb-5">Actualizar</h5>
                <form action="{{route('persona.actualizar', $persona->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="primer_nombre" class="col-sm-4 col-form-label">Primer nombre:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" value="{{$persona->primer_nombre}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="segundo_nombre" class="col-sm-4 col-form-label">Segundo nombre:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" value="{{$persona->segundo_nombre}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidos" class="col-sm-4 col-form-label">Apellidos:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$persona->apellidos}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numero_cedula" class="col-sm-4 col-form-label">Numero de cedula:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="numero_cedula" name="numero_cedula" value="{{$persona->numero_cedula}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccion" class="col-sm-4 col-form-label">Direccion:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="direccion" name="direccion" value="{{$persona->direccion}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-4 col-form-label">Telefono:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="telefono" name="telefono" value="{{$persona->telefono}}">
                        </div>
                    </div>
                    <div class="form-group row mb-5">
                        <label for="ciudad" class="col-sm-4 col-form-label">Ciudad:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{$persona->ciudad}}">
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-primary" type="submit">Actualizar</button>
                    <a class="btn btn-info" href="{{route('persona.index')}}">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("tipo").selectedIndex = {{$persona->tipo}};
    </script>
@endsection
