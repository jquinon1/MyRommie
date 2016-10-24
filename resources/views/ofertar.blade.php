@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ofertas</div>
                    <div class="panel-body">
                        <form class="form-horizontal" >
                            <div class="form-group">
                                <label for="ofertar" class="col-md-4 control-label">Ofertar:  </label>

                                <div class="col-md-6">
                                    <output id="nombre" type="email" class="form-control" name="nombre" ></output>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="respuesta" class="col-md-4 control-label"> Respuesta: </label>
                                <div class="col-md-6">
                                    <output id="respuesta" type="respuesta" class="form-control" name="nombre" ></output>
                                </div>
                            </div>

                            <div class="form-group">
                                <input href="../pm" type="button" value="Ofertar" class="input" >
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>


@endsection
