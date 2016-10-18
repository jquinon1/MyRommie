@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contacto Arrendador</div>
                    <div class="panel-body">
                        <form class="form-horizontal" >

                            <div class="form-group">
                                <label for="nombre" class="col-md-4 control-label">Nombre Completo: </label>

                                <div class="col-md-6">
                                    <output id="nombre" type="email" class="form-control" name="nombre" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="numero" class="col-md-4 control-label">Numero: </label>

                                <div class="col-md-6">
                                    <output id="numero" type="email" class="form-control" name="numero" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Correo" class="col-md-4 control-label">Correo: </label>

                                <div class="col-md-6">
                                    <output id="Correo" type="email" class="form-control" name="Correo" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Direccion" class="col-md-4 control-label">Direccion: </label>

                                <div class="col-md-6">
                                    <output id="Direccion" type="email" class="form-control" name="Direccion" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="info" class="col-md-4 control-label">Informacion Adicional: </label>

                                <div class="col-md-6">
                                    <output id="info" type="email" class="form-control" name="info" >
                                </div>
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
