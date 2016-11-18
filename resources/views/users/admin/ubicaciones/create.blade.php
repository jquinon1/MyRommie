<center><strong>Agregar Ubicacion</strong></center><hr>
{!! Form::open(['route'=>'ubicaciones.store','method'=>'POST','class'=>'form-horizontal']) !!}
<div class="form-group">
    {!! Form::label('pais', 'Pais', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('pais',null,['class' => 'form-control','required','autofocus']) !!}
  </div>
</div>
<div class="form-group">
    {!! Form::label('ciudad', 'Ciudad', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('ciudad',null,['class' => 'form-control','required','autofocus']) !!}
  </div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit('Agregar',['class' => 'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}