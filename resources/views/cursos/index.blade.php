@extends('layouts.app')

@section('titulo', 'Listado Cursos')

@section('contenido')

<div class="row">
{{--vamos a interpolar la informacion de php--}}
@foreach ($cursito as $curso )

<div class="col-sm">
    <div class="card" style="width: 18rem !important;">
        <img src="{{Storage::url($curso->imagen)}}" class="card-img-top" >
        <div class="card-body">
          <h5 class="card-title">{{$curso->nombre}}</h5>
          <p class="card-text">{{$curso->descripcion}}</p>
          <a href="#" class="btn btn-dark" role="button">ver mas </a>
        </div>
      </div>

</div>




@endforeach

</div>

@endsection
