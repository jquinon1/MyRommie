@extends('layouts.app')
@section('title','My Rommie')
@section('content')
{{-- {{ dd($universidades) }} --}}
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

    #rcorners2 {
        border-radius: 25px;
        border: 3px solid whitesmoke;
        padding: 20px;

        height: 100px;
    }
</style>

<div class="container">
<div class="row">
    <div class="flex-center full-height">
        <video width="150%" height="10%" autoplay loop muted preload="none" id="background">
            <source src="../video/Lapse.mp4" type="video/mp4" />
        </video>
        <div class="links" style="text-align: center;" id="rcorners2">
            <a href="estudiante" style="color: white;border: #f5fdf5"><font size="20">ESTUDIANTE</font></a>
        </div>
        &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
        {{-- <p>  &nbsp;&nbsp; &nbsp;&nbsp;</p> --}}
        <div class="links" style="text-align: center;" id="rcorners2">
            <a href="habitaciones" style="color: white" ><font size="20">HABITACIONES</font></a>
        </div>
        &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;
        {{-- <p>  &nbsp;&nbsp; &nbsp;&nbsp;</p> --}}
        <div class="links" style="text-align: center;" id="rcorners2">
            <a href="habitaciones/create" style="color: white" ><font size="20">ARRENDADOR</font></a>
        </div>

    </div>
    </div>
</div>
{{-- </body> --}}
@endsection
