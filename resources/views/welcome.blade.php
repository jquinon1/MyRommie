@extends('layouts.app')
@section('title','My Rommie')
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
            <source src="../video/Lapse.mp4" type="video/mp4" />
        </video>

        <div class="links" >
            <a href="estudiante" style="color: white;border: #f5fdf5"><font size="20">ESTUDIANTE</font></a>
            <a href="arrendador" style="color: white" ><font size="20">ARRENDADOR</font></a>
        </div>
    </div>
</body>
@endsection
