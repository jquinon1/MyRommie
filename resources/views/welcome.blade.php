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
        height: auto;
    }
    .mycontainer{
        max-width: 90%;
        margin: 20% auto;
    }
    .mibtn{
        padding: 20px;
        text-align: center;
        /*margin-right: 10px;*/
        
    }
    .col-md-4 a{
        color: white;
        padding: 0 15px;
        font-size: 30px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>
<div class="mycontainer">
<div class="row">
    <video width="100%" height="100%" autoplay loop muted preload="none" id="background">
        <source src="../video/Lapse.mp4" type="video/mp4" />
    </video>
    <div class="col-md-4 mibtn" id="rcorners2">
        <a href="estudiante" >ESTUDIANTE</font></a>
    </div>
    <div class="col-md-4 mibtn" id="rcorners2">
        <a href="habitaciones" >HABITACIONES</font></a>
    </div>
    <div class="col-md-4 mibtn" id="rcorners2">
        <a href="habitaciones/create" >ARRENDADOR</font></a>
    </div>
</div>
</div>
@endsection