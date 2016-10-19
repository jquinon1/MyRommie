@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Acerca De</div>
                    <div class="panel-body">
                        <form class="form-horizontal" >
                            <div class="form-group">
                                <label for="nombre" class="col-md-4 control-label">Correo </label>
                                <div class="col-md-6">
                                    <output id="nombre" type="email" class="form-control" name="nombre" >myrommie@enterpise.com</output>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nombre" class="col-md-4 control-label">Telefono </label>
                                <div class="col-md-6">
                                    <output id="nombre" type="email" class="form-control" name="nombre" >1800myrommie</output>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nombre" class="col-md-4 control-label">Fax </label>
                                <div class="col-md-6">
                                    <output id="nombre" type="email" class="form-control" name="nombre" >754821630</output>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nombre" class="col-md-4 control-label">Direccion </label>
                                <div class="col-md-6">
                                    <output id="nombre" type="email" class="form-control" name="nombre" >Centro Comercial Eafit oficina 19-2</output>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
