<div class="container" >
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
      <div class="panel-heading">Agregar imagen</div>
        <div class="panel-body">
          {!! Form::open(["route"=>["imagenes.store",$habitacion->id], "class"=>"form-horizontal","files"=>true]) !!}
          <div class="form-group">
            {!! Form::label("imagen","Imagen",["class"=>"col-md-4 control-label"]) !!}
            <div class="col-md-6">
              {!! Form::file("imagen") !!}
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
              {!! Form::submit("Agregar",["class" => "btn btn-primary"]) !!}
            </div>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>