@extends('layouts.app')
@section('title','Contáctanos')
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
    <!-- <div class="flex-center position-ref full-height" > -->
      <video width="100%" height="100%" autoplay loop muted preload="none" id="background">
        <source src="../video/Lapse3.mp4" type="video/mp4" />
      </video>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default" style="margin-bottom: 50%">
                    <div class="panel-heading">Contáctanos</div>
                    <div class="panel-body">
                        <form class="form-horizontal" >
                            <div class="form-group">
                                <label for="nombre" class="col-md-4 control-label ">Correo: </label>
                                <label id="nombre" type="email"  name="nombre " class="control-label" >myrommie@gmail.com</label>
                            </div>
                            <div class="form-group">
                                <label for="nombre" class="col-md-4 control-label">Teléfono: </label>
                                <label id="nombre" type="email"  name="nombre" class="control-label">3137668717</label>
                            </div>

                            <div class="form-group">
                                <label for="nombre" class="col-md-4 control-label">Dirección: </label>
                                <label id="nombre" type="email"  name="nombre" class="control-label">Universidad Eafit oficina 19-2</label>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
@endsection
