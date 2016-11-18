<center><strong>Agregar Universidad</strong></center><hr>
{!! Form::open(['route'=>'universidades.store','method'=>'POST','class'=>'form-horizontal','files'=>true]) !!}
<div class="form-group">
    {!! Form::label('nombre', 'Nombre', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('nombre',null,['class' => 'form-control','required','autofocus']) !!}
  </div>
</div>
<div class="form-group">
    {!! Form::label('lema', 'Slogan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('lema',null,['class' => 'form-control','required','autofocus']) !!}
  </div>
</div>
<div class="form-group">
    {!! Form::label('pagina', 'Pagina Oficial', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('pagina',null,['class' => 'form-control','required','autofocus']) !!}
  </div>
</div>
<div class="form-group">
    {!! Form::label('direccion', 'Direccion', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::text('direccion',null,['class' => 'form-control','required','autofocus']) !!}
  </div>
</div>
<div class="form-group">
    {!! Form::label('ciudad', 'Ciudad', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      {!! Form::select('ciudad',$ciudades,null,['class'=>'form-control','placeholder'=>'Ciudad','required']) !!}
  </div>
</div>
<div class="form-group">
 {!! Form::label('imagen','Imagen',['class'=>'col-md-4 control-label']) !!}
 <div class="col-md-6">
    {!! Form::file('imagen',['required']) !!}
</div>
</div>
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        {!! Form::submit('Agregar',['class' => 'btn btn-primary']) !!}
    </div>
</div>
{!! Form::close() !!}