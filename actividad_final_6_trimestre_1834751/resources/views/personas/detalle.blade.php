@extends('layout')

@section('titulo', 'Detalle')

@section('contenido')
    <div class="row" style="justify-content: center">
        <div class="card text-white p-4" style="width:700px; border:solid; opacity: 0.7; background: black;">
            <div class="card-body">
                <h5 class="card-title">Detalle</h5>
                <hr>
                <dl>
                    <dt>Nombres y Apellidos:</dt>
                    <dd>{{$persona->primer_nombre}} {{$persona->segundo_nombre}} {{$persona->apellidos}}</dd>
                    <br>
                    <dt>Numero de cedula:</dt>
                    <dd>{{$persona->numero_cedula}}</dd>
                    <br>
                    <dt>Direccion:</dt>
                    <dd>{{$persona->direccion}}</dd>
                    <br>
                    <dt>Telefono:</dt>
                    <dd>{{$persona->telefono}}</dd>
                    <br>
                    <dt>Ciudad:</dt>
                    <dd>{{$persona->ciudad}}</dd>
                    <br>
                    <dt>opciones:</dt>
                    <dd class="pt-1">
                        <form action="{{route('persona.eliminar', $persona->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('persona.editar', $persona->id)}}" data-toggle="tooltip" data-placement="bottom" title="Editar" style="margin-right: 40px">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-pen-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"/>
                                </svg>
                            </a>
                            <button class="btn" type="submit" data-toggle="tooltip" data-placement="top" title="Eliminar" style="color: orangered">
                                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                </svg>
                            </button>
                        </form>
                    </dd>
                    <br>
                </dl>
                <hr>
                <a class="btn btn-info" href="{{route('persona.index')}}">Regresar</a>
            </div>
        </div>
    </div>
@endsection

