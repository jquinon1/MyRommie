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

<video width="150%" height="100%" autoplay loop muted preload="none" id="background">
    <source src="../video/zion.mp4" type="video/mp4" />
</video>

<div class="links" >
    <a href="estudiante" style="color: whitesmoke"><font size="20">ESTUDIANTE</font></a>
    <a href="arrendador" style="color: whitesmoke" ><font size="20">ARRENDADOR</font></a>
</div>
</div>



    </body>



@endsection
