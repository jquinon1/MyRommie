<div class="container" >
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">

        <div class="panel-heading">Datos</div>
        <div class="panel-body">
          {!! Form::open(['class'=>'form-horizontal']) !!}
          <div class="form-group">
            {!! Form::label('nombre', 'Nombre:', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
              {!! Form::label('nombre',$user->nombre . $user->apellido,['class' => 'col-md-4 form-control','required','autofocus']) !!}
            </div>
          </div>
          <div class="form-group">
            {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-6">
              {!! Form::label('email',$user->email,['class' => 'form-control','required','autofocus']) !!}
            </div>
          </div>
          <div class="form-group">
            <div id="calificaionUser" class="pull-left" style="margin-left: 20%;"></div>
            <div class="col-md-6">
              <a id="calificarUser" class="btn btn-info">Calificar</a>
            </div>
          </div>


          {!! Form::close() !!} 

        </div>
      </div>
    </div>
  </div>
</div>
