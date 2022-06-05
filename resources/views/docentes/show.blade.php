@extends('layouts.app')

@section('titulo', 'Detalle Docente')
@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($docente->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <h4 class="card-text">Nombre y apellido: {{$docente->nombres}} {{$docente->apellidos}}</h4>
        <p class="card-text">email: {{$docente->email}}</p>
        <p class="card-text">edad: {{$docente->edad}} años.</p>
    </div>
    <a href="/docentes/{{$docente->id}}/edit" class="btn btn-danger">Editar Docente</a>
</div>

@endsection