@extends('layouts.app')
@section('title','Editar ubicacion')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar</div>
                <div class="panel-body">
                    {!! Form::open(['route'=>['ubicaciones.update',$ubicacion->id],'method'=>'PUT','class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('pais', 'Pais', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('pais',$ubicacion->pais,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('ciudad', 'Ciudad', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('ciudad',$ubicacion->ciudad,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
