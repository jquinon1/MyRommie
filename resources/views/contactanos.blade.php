@extends('layouts.app')
@section('title','Acerca de')
@section('content')
    <style>
        #background {
            position: fixed;
            top: 58%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            background-size: cover;
        }
    </style>
    <div class="flex-center position-ref full-height" >
        <video width="150%" height="10%" autoplay loop muted preload="none" id="background">
            <source src="../video/Lapse3.mp4" type="video/mp4" />
        </video>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="margin-bottom: 50%">
                    <div class="panel-heading">Contactanos</div>
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
    </div>
@endsection
