@extends('layouts.app')

@section('titulo', 'Listado Cursos')

@section('contenido')

<h3>Editar el Curso</h3>
<br>
<form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="nombre">Ingrese el nuevo Nombre del Curso</label>
        <input id="nombre" value="{{$cursito->nombre}}" class="form-control" type="text" name="nombre">
    </div>
    <div class="form-group">
        <label for="descrip">Ingrese la nueva descripción del curso</label>
        <input id="descrip" value="{{$cursito->descripcion}}" class="form-control" type="text" name="descripcion">
    </div>
    <div class="form-group">
        <label for="descrip">Cargue la imagen para el curso</label>
        <br>
        <input id="imagen"  type="file" name="imagen">
    </div>
    <button class="btn btn-danger" type="submit">Actualizar</button>
</form>
<a name ="" class="btn btn-danger" href="{{ url()->previous() }}" role="button" >Regresar</a>

@endsection