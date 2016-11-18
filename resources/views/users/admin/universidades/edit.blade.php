@extends('layouts.app')
@section('title','Editar Universidad')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar</div>
                <div class="panel-body">
                    {!! Form::open(['route'=>['universidades.update',$universidad->id],'method'=>'PUT','class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nombre',$universidad->nombre,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('lema', 'Slogan', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('lema',$universidad->lema,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('direccion', 'direccion', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('direccion',$universidad->direccion,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('pagina', 'Pagina Oficial', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('pagina',$universidad->pagina,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>

                        {{-- AQUI SE VA A PONER LA FOTO --}}
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