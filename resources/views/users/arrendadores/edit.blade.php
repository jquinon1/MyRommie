@extends('layouts.app')
@section('title','Datos')
@section('content')
<style >
    .white-popup {
  position: relative;
  background: #FFF;
  padding: 20px;
  width: auto;
  max-width: 500px;
  margin: 20px auto;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Datos</div>
                <div class="panel-body">
                    {!! Form::open(['route'=>['users.update', $user->id], 'method'=>'PUT','class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nombre',$user->nombre,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                         <div class="form-group">
                            {!! Form::label('apellido', 'Apellido', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('apellido',$user->apellido,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('tipo_id', 'Tipo ID', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::label('tipo_id',$user->tipo_id,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('numId', 'Numero ID', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::label('numId',$user->numId,['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('genero', 'Genero', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('genero',['hombre'=>'Hombre','mujer'=>'Mujer','lgbti'=>'Lgbti'],$user->genero,['class' => 'form-control','required','autofocus','placeholder'=>'Elige']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::label('email',$user->email,['class' => 'form-control','required','autofocus']) !!}
                            </div>
                        </div>
                        
                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Actualizar',['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                
                                    <a href="{{ route('users.destroy',Auth::user()->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure?'); ">
                                Eliminar Cuenta
                            </a>
                            </div>
                        </div>
                       
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



