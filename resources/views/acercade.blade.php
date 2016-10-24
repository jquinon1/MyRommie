@extends('layouts.app')
@section('title','Contactanos')
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
    <body>
    <div class="flex-center position-ref full-height" >
        <video width="150%" height="10%" autoplay loop muted preload="none" id="background">
            <source src="../video/Lapse3.mp4" type="video/mp4" />
        </video>
        <div class="row" style="margin-bottom: 20%">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Acerca De</div>
                    <div class="panel-body">
                        <form class="form-horizontal" >
                            <h4>MyRommie empezó como una idea de 4 estudiantes de la Universidad de EAFIT, con el propósito de realizar un proyecto que buscara solucionar un problema que esté vigente en el mundo actualmente, fue así como Craig David Cartagena Castaño, Jhonatan Quiñonez Ávila, Juan Camilo Henao Salazar y Juan Diego Zuluaga Gallo. Pensaron en crear una página web que ayudara a los estudiantes de diferentes universidades a buscar un lugar donde hospedarse mientras estén realizando sus estudios. Teniendo en cuenta los detalles que hagan que sea una página con información completa y de fácil uso para los usuarios.</h4>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection