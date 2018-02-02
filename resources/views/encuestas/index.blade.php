@extends('layouts.app')
@section('content')
<div class="row">

    @foreach( $arrayEncuestas as $key => $encuesta )
    <div class="col-md-6 col-md-offset-3" style="text-align: center;">
    
        <div class="panel panel-info">
            <div class="panel-heading">{{$encuesta->titulo}}</div>
                <div class="panel-body">
                    <a href="{{ url('/encuestas/' . $encuesta->id ) }}">
                        <h4 style="min-height:45px;margin:5px 0 10px 0">
                            Votar
                        </h4>
                    </a>
                    <a href="{{ url('/encuestas/' . $encuesta->id ) }}">
                        <h4 style="min-height:45px;margin:5px 0 10px 0">
                            Editar
                        </h4>
                    </a>
                </div>
        </div>
  
    </div>
    @endforeach

</div>
@endsection