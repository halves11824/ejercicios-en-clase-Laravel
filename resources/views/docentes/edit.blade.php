@extends('layouts.app')

@section('titulo', 'Listado Cursos')

@section('contenido')

<h3>Editar el Curso</h3>
<br>
<form action="/cursos/{{$docente->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="nombres">Ingrese el nombre del nuevo docente</label>
        <input id="nombres" value="{{$docente->nombre}}" class="form-control" type="text" name="nombres">
    </div>
    <div class="form-group">
        <label for="apellidos">Ingrese el apellido del nuevo Docente</label>
        <input id="apellidos" value="{{$docene->apellidos}}" class="form-control" type="text" name="apellidos">
    </div>
    <div class="form-group">
        <label for="email">Ingrese el nuevo email del docente</label>
        <input id="email" value="{{$docente->email}}" class="form-control" type="email" mane="email">
    </div>
    <div class="form-group">
        <label for="edad">Ingrese la edad del docente</label>
        <input id="edad" value="{{$docente->edad}}" class="form-control" type="number" name="emailcion">
    </div>
    <div class="form-group">
        <label for="descrip">Ingrese la descripción del curso</label>
        <input id="descrip" value="{{$docente->descripcion}}" class="form-control" type="text" name="descripcion">
    </div>
    <div class="form-group">
        <label for="descrip">Cargue la foto docente</label>
        <br>
        <input id="imagen"  type="file" name="imagen">
    </div>
    <button class="btn btn-danger" type="submit">Actualizar</button>
</form>
<a name ="" class="btn btn-danger" href="{{ url()->previous() }}" role="button" >Regresar</a>

@endsection