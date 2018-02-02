@extends('layouts.app')
@section('content')
<div class="alert alert-success">
  <strong>¡Bien hecho!</strong> Nueva Encuesta creada.
</div>
<ul class="nav nav-pills">
  <li class="active"><a href="{{ url('encuestas') }}">Inicio</a></li>
  <li class="active"><a href="{{ url('encuestas/crear') }}">Crear una nueva encuesta</a></li>
</ul>
@endsection

