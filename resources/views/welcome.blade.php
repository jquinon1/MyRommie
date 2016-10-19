@extends('layouts.app')
@section('title','My Rommie')
@section('content')

<div class="flex-center position-ref full-height" >

    <div style="position: fixed-top; z-index: -99; width: 200%; height: 130%; volume: silent" >
        <iframe width="138%" height="100%" src="http://www.youtube.com/embed/sK2e42jzohk?
        &autoplay=1
&loop=1
&playlist=sK2e42jzohk
&showinfo=0
&autohide=1
&controls=0
&rel=0
" frameborder="0" allowfullscreen></iframe>
        <script type="text/javascript">
            myVid.muted=true;
        </script>
    </div>


    <div class="links">
        <a href="estudiante" style="color: whitesmoke" ><font size="20">ESTUDIANTE</font></a>
        <a href="arrendador" style="color: whitesmoke" ><font size="20">ARRENDADOR</font></a>
    </div>

    </body>
</div>


@endsection
