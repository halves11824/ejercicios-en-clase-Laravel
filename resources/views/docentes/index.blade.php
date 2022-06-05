@extends('layouts.app')

@section('titulo', 'Listado Docentes')

@section('contenido')

<div class="row">
    {{-- Vamos a intrerpolar la informacion de php--}}
    @foreach ( $docente as $docente_ )
    <div class="col-sm">
        <div class="card">
            <img class="card-img-top" src="{{Storage::url($docente_->imagen)}}" alt="" width="500" height="300">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{$docente_->nombres}}</h5>
                <h5 class="card-text">Apellido: {{$docente_->apellido}}</h5>
                <p class="card-text">email: {{$docente->email}}</p>
                <a name="" id="" class="btn btn-danger" href="/docentes/{{$docente_->id}}" role="button">Ver mas</a>
            </div>
        </div>
    </div>

    @endforeach
</div>
@endsection
