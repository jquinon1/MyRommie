<div class="container" >
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
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
            <div class="col-md-12 col-xs-12">
              <div class="col-md-8 col-xs-8">
                <center>
                  <div id="calificaionUser"></div></center>
                </div class="col-md-4 col-xs-4">
                <a id="calificarUser" class="btn btn-info col-md-4 col-xs-4">Calificar</a>
              </div>
            </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <div class="col-md-2">

      </div>
    </div>
  </div>
