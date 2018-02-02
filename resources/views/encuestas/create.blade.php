@extends('layouts.app')
@section('content')

<div class="row" style="margin-top:20px">

    <div class="col-md-offset-3 col-md-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title text-center">
                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                    Añadir Encuesta
                </h3>
            </div>

            <div class="panel-body" style="padding:30px">
            
                <form action="{{ url('encuestas/crear') }}" method="POST">
                
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="titulo">Titulo de la pregunta</label>
                        <input type="text" name="titulo" id="titulo" class="form-control">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                            Añadir Encuesta
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!--stop-->


@endsection


